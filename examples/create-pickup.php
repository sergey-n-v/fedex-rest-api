<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use FedExRestApi\PickupService\ComplexType\CreatePickupRequest;
use FedExRestApi\PickupService\ComplexType\PickupAccountNumber;
use FedExRestApi\PickupService\ComplexType\PickupAddress;
use FedExRestApi\PickupService\ComplexType\PickupContact_CreatePickup;
use FedExRestApi\PickupService\ComplexType\PickupOriginDetail;
use FedExRestApi\PickupService\ComplexType\PickupParty_createPickup;

use FedExRestApi\PickupService\ComplexType\PickupWeight;
use FedExRestApi\PickupService\Request as PickUpServiceRequest;

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
$pickUpServiceRequest = new PickUpServiceRequest();
$pickUpServiceRequest->setAccessToken($accessToken);

$createPickupReply = $pickUpServiceRequest->createPickup(
    (new CreatePickupRequest)
    ->setAssociatedAccountNumber(
        (new PickupAccountNumber())->setValue($pickUpServiceRequest->getAccountId())
    )
    ->setOriginDetail(
        (new PickupOriginDetail())
        ->setPickupAddressType(\FedExRestApi\PickupService\SimpleType\PickupPickupAddressType::_OTHER)
        ->setPickupLocation(
            (new PickupParty_createPickup())
            ->setContact(
                (new PickupContact_CreatePickup())
                ->setCompanyName("CompanyName")
                ->setPersonName('Person Name')
                ->setPhoneNumber('24234523532')
                ->setPhoneExtension('122')
            )
            ->setAddress(
                (new PickupAddress())
                ->setStreetLines([
                    'StreetLine 1',
                    'StreetLine 2',
                    'StreetLine 3'
                ])
                ->setCity('Memphis')
                ->setStateOrProvinceCode('TN')
                ->setPostalCode('38125')
                ->setPostalCode('38125')
//                ->setResidential(true)
//                ->setAddressClassification(\FedExRestApi\PickupService\SimpleType\PickupAddressClassification::_RESIDENTIAL)
            )
            ->setAccountNumber(
                (new PickupAccountNumber())
                ->setValue($pickUpServiceRequest->getAccountId())
            )
            ->setDeliveryInstructions('DeliveryInstructions')
        )
        ->setReadyDateTimestamp(date('c', mktime(9, 0, 0, date("m")  , date("d")+1, date("Y"))))
        ->setCustomerCloseTime(date('c', mktime(19, 0, 0, date("m")  , date("d")+1, date("Y"))))
        ->setPickupDateType(\FedExRestApi\PickupService\SimpleType\PickupPickupDateType::_SAME_DAY)
        ->setPackageLocation(\FedExRestApi\PickupService\SimpleType\PickupPackageLocation::_NONE)
        ->setBuildingPart(\FedExRestApi\PickupService\SimpleType\PickupBuildingPart::_APARTMENT)
        ->setBuildingPartDescription('Building Part Description')
        ->setEarlyPickup(false)
//        ->setSuppliesRequested('Supplies requested by customer')
//        ->setGeographicalPostalCode('This is the alternate postal code associated with pickup location. (Applicable only for European pickups)')
    )
//    ->setAssociatedAccountNumber(
//        (new PickupAccountNumber())
//            ->setValue($pickUpServiceRequest->getAccountId())
//    )
    ->setTotalWeight(
            (new PickupWeight())
            ->setValue(1.00)
            ->setUnits(\FedExRestApi\PickupService\SimpleType\PickupUnits::_KG)
        )
    ->setPackageCount(1)
    ->setCarrierCode(\FedExRestApi\PickupService\SimpleType\PickupCarrierCode::_FDXE)
    ->setRemarks('Example: Please ring bell at loading dock.')
    ->setPickupType('ON_CALL')
    ->setTrackingNumber('795803657326') //This is a Tracking number for FedEx packages used for tracking a single package or group of packages.

);

var_dump($createPickupReply->getErrors());
