<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AddressValidationService\ComplexType\AddressValidationAddress;
use FedExRestApi\AddressValidationService\ComplexType\AddressValidationAddressResolutionControlParameters;
use FedExRestApi\AddressValidationService\ComplexType\AddressValidationRequest;
use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use FedExRestApi\AddressValidationService\Request as FedexAddressValitionService;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse){
    $accessToken = $ratesReply->getAccessToken();
}else{
    var_dump("Auth Error",$ratesReply->getErrors());
    die;
}

//authentication & client details
$addressValidationServiceRequest = new FedexAddressValitionService();
$addressValidationServiceRequest->setAccessToken($accessToken);

$addressValidationReply = $addressValidationServiceRequest->validateAddress(
    (new AddressValidationRequest())
    ->setInEffectAsOfTimestamp(date('Y-m-d'))
    ->setValidateAddressControlParameters(
        (new AddressValidationAddressResolutionControlParameters())
        ->setIncludeResolutionTokens(false)
    )
    ->setAddressesToValidate(
    [
        (new \FedExRestApi\AddressValidationService\ComplexType\AddressValidationResolveContactAndAddress())
        ->setClientReferenceId('ClientReferenceId'.time())
        ->setAddress(
            (new AddressValidationAddress())
            ->setStreetLines(
                [
                    '12345 Main Street'
                ]
            )
            ->setPostalCode('47711')
            ->setCity('Anytown')
            ->setStateOrProvinceCode('NY')
            ->setCountryCode('US')
        )
    ]
    )
);


    var_dump($addressValidationReply);


