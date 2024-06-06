<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use FedExRestApi\RateService\ComplexType\RateRateAddress;
use FedExRestApi\RateService\ComplexType\RateRequestePackageLineItemDimensions;
use FedExRestApi\RateService\Request as FedexRateRequest;

use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\RateService\ComplexType;
use FedExRestApi\RateService\SimpleType;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse){
    $accessToken = $ratesReply->getAccessToken();
}else{
    var_dump("Auth Error",$ratesReply->getErrors());
    die;
}

$rateRequest = new ComplexType\RateRequest();
//authentication & client details
$rateServiceRequest = new FedexRateRequest();
$rateServiceRequest->setAccessToken($accessToken);


$rateRequest->setAccountNumber(
    (new ComplexType\RateAccountNumber())->setValue($rateServiceRequest->getAccountId())
);

$rateRequest->setCarrierCodes([SimpleType\RateCarrierCode::_FDXE,SimpleType\RateCarrierCode::_FDXG]);

$rateRequestedShipment = new ComplexType\RateRequestedShipment();
$rateRequestedShipment->setShipper(
    (new ComplexType\RateRateParty())->setAddress(
        (new RateRateAddress())
        ->setCountryCode('US')
        ->setPostalCode(38115)
    )
)
->setRecipient(
    (new ComplexType\RateRateParty())->setAddress(
        (new RateRateAddress())
            ->setCountryCode('US')
            ->setPostalCode(20171)
    )
)
    ->setRateRequestType([SimpleType\RateRateType::_PREFERRED,SimpleType\RateRateType::_LIST])
    ->setPickupType(SimpleType\RatePickupType::_USE_SCHEDULED_PICKUP)
    ->setRequestedPackageLineItems(
        [
            (new ComplexType\RateRequestedPackageLineItem())
            ->setGroupPackageCount(1)
                ->setDeclaredValue(
                    (new ComplexType\RateMoney())
                    ->setAmount(10)
                    ->setCurrency("USD")
                )
            ->setWeight(
                (new ComplexType\RateWeight_2())
                ->setValue(1)
                ->setUnits(SimpleType\RateUnits::_KG)
            )
            ->setDimensions(
                (new RateRequestePackageLineItemDimensions())
                ->setUnits("CM")
                ->setWidth(10)
                ->setLength(10)
                ->setHeight(3)
            ),
            (new ComplexType\RateRequestedPackageLineItem())
                ->setGroupPackageCount(1)
                ->setDeclaredValue(
                    (new ComplexType\RateMoney())
                        ->setAmount(10)
                        ->setCurrency("USD")
                )
                ->setWeight(
                    (new ComplexType\RateWeight_2())
                        ->setValue(0.342)
                        ->setUnits(SimpleType\RateUnits::_KG)
                )
                ->setDimensions(
                    (new RateRequestePackageLineItemDimensions())
                        ->setUnits("CM")
                        ->setWidth(1)
                        ->setLength(12)
                        ->setHeight(3)
                )
        ]
    )
    ->setPackagingType('YOUR_PACKAGING')
    ->setTotalPackageCount(2)
;

$rateRequest->setRequestedShipment($rateRequestedShipment);


$rateReply = $rateServiceRequest->getRate($rateRequest);


var_dump($rateReply);
