<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AddressValidationService\ComplexType\AddressValidationAddress;
use FedEx\AddressValidationService\ComplexType\AddressValidationAddressResolutionControlParameters;
use FedEx\AddressValidationService\ComplexType\AddressValidationRequest;
use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;
use FedEx\AddressValidationService\Request as FedexAddressValitionService;

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
        (new \FedEx\AddressValidationService\ComplexType\AddressValidationResolveContactAndAddress())
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


