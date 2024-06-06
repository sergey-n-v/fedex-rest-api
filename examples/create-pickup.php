<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;
use FedEx\PickupService\ComplexType\CreatePickupRequest;
use FedEx\PickupService\ComplexType\PickupAccountNumber;
use FedEx\PickupService\ComplexType\PickupAddress;
use FedEx\PickupService\ComplexType\PickupContact_CreatePickup;
use FedEx\PickupService\ComplexType\PickupOriginDetail;
use FedEx\PickupService\ComplexType\PickupParty_createPickup;

use FedEx\PickupService\ComplexType\PickupWeight;
use FedEx\PickupService\Request as PickUpServiceRequest;

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
        ->setPickupAddressType(\FedEx\PickupService\SimpleType\PickupPickupAddressType::_OTHER)
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
//                ->setAddressClassification(\FedEx\PickupService\SimpleType\PickupAddressClassification::_RESIDENTIAL)
            )
            ->setAccountNumber(
                (new PickupAccountNumber())
                ->setValue($pickUpServiceRequest->getAccountId())
            )
            ->setDeliveryInstructions('DeliveryInstructions')
        )
        ->setReadyDateTimestamp(date('c', mktime(9, 0, 0, date("m")  , date("d")+1, date("Y"))))
        ->setCustomerCloseTime(date('c', mktime(19, 0, 0, date("m")  , date("d")+1, date("Y"))))
        ->setPickupDateType(\FedEx\PickupService\SimpleType\PickupPickupDateType::_SAME_DAY)
        ->setPackageLocation(\FedEx\PickupService\SimpleType\PickupPackageLocation::_NONE)
        ->setBuildingPart(\FedEx\PickupService\SimpleType\PickupBuildingPart::_APARTMENT)
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
            ->setUnits(\FedEx\PickupService\SimpleType\PickupUnits::_KG)
        )
    ->setPackageCount(1)
    ->setCarrierCode(\FedEx\PickupService\SimpleType\PickupCarrierCode::_FDXE)
    ->setRemarks('Example: Please ring bell at loading dock.')
    ->setPickupType('ON_CALL')
    ->setTrackingNumber('795803657326') //This is a Tracking number for FedEx packages used for tracking a single package or group of packages.

);

var_dump($createPickupReply->getErrors());
