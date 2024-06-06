<?php

require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;

use FedEx\OpenShipService\ComplexType\ConfirmOpenShipmentRequest;
use FedEx\OpenShipService\ComplexType\CreateOpenShipmentRequest;
use FedEx\OpenShipService\ComplexType\ModifyOpenShipmentPackagesRequest;
use FedEx\OpenShipService\ComplexType\OpenShipCommercialInvoice;
use FedEx\OpenShipService\ComplexType\OpenShipCustomsClearanceDetail;
use FedEx\OpenShipService\ComplexType\OpenShipDimensions;
use FedEx\OpenShipService\ComplexType\OpenShipLabelSpecification;
use FedEx\OpenShipService\ComplexType\OpenShipMoney;
use FedEx\OpenShipService\ComplexType\OpenShipOpenshipmentRequestedShipment;
use FedEx\OpenShipService\ComplexType\OpenShipPartyAccountNumber;
use FedEx\OpenShipService\ComplexType\OpenShipPartyAddress;
use FedEx\OpenShipService\ComplexType\OpenShipPartyContact;
use FedEx\OpenShipService\ComplexType\OpenShipPayment;
use FedEx\OpenShipService\ComplexType\OpenShipRequestedPackageLineItem;
use FedEx\OpenShipService\ComplexType\OpenShipShipperParty;
use FedEx\OpenShipService\ComplexType\OpenShipTrackingId;
use FedEx\OpenShipService\ComplexType\OpenShipWeight;
use FedEx\OpenShipService\ComplexType\RetrieveOpenShipmentRequest;
use FedEx\OpenShipService\Request as FedexOpenShipService;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse) {
    $accessToken = $ratesReply->getAccessToken();
} else {
    var_dump("Auth Error", $ratesReply->getErrors());
    die;
}

//authentication & client details
$fedexOpenShipService = new FedexOpenShipService();
$fedexOpenShipService->setAccessToken($accessToken);

$index = "specialIndex".time();

/********************************************************
 * Create initial open shipment request with 1 package...
 ********************************************************/

$fedexOpenShipReply = $fedexOpenShipService->createOpenShipment(
    (new CreateOpenShipmentRequest())
    ->setAccountNumber(
        (new OpenShipPartyAccountNumber())
        ->setValue($fedexOpenShipService->getAccountId())
    )
    ->setIndex($index)
    ->setOpenShipmentAction(\FedEx\OpenShipService\SimpleType\OpenShipOpenShipmentAction::_CREATE_PACKAGE)
    ->setRequestedShipment(
        (new OpenShipOpenshipmentRequestedShipment())
        ->setShipDatestamp(date('c'))
        ->setPickupType(\FedEx\OpenShipService\SimpleType\OpenShipPickupType::_USE_SCHEDULED_PICKUP)
        ->setServiceType('PRIORITY_OVERNIGHT')
        ->setPackagingType('YOUR_PACKAGING')
//        ->setTotalWeight(1)
            ->setShipper(
                (new OpenShipShipperParty())
                ->setAddress(
                    (new OpenShipPartyAddress())
                        ->setStreetLines(
                            [
                                'Address Line 1',
                                'Address Line 2',
                                'Address Line 3'
                            ]
                        )
                        ->setCity('Austin')
                        ->setCountryCode('US')
                        ->setStateOrProvinceCode('TX')
                        ->setPostalCode('73301')
                )
                ->setContact(
                    (new OpenShipPartyContact())
                        ->setCompanyName('Company Name')
                        ->setEmailAddress('test@example.com')
                        ->setPersonName('Person Name')
                        ->setPhoneNumber('123-123-1234')
                )
                ->setTins(
                    [
                        (new \FedEx\OpenShipService\ComplexType\OpenShipTaxpayerIdentification())
                            ->setTinType(\FedEx\OpenShipService\SimpleType\OpenShipTinType::_PERSONAL_STATE)
                            ->setNumber('vat_TAX')
                    ]
                )
            )
        ->setRecipients(
            [
                (new \FedEx\OpenShipService\ComplexType\OpenShipRecipientsParty())
                ->setAddress(
                    (new OpenShipPartyAddress())
                        ->setStreetLines(
                            [
                                'Address Line 1',
                                'Address Line 2',
                                'Address Line 3'
                            ]
                        )
                        ->setCity('Herndon')
                        ->setCountryCode('US')
                        ->setStateOrProvinceCode('TX')
                        ->setPostalCode('73301')
                )
                ->setContact(
                    (new OpenShipPartyContact())
                        ->setCompanyName('Recipient Company Name')
                        ->setEmailAddress('Recipienttest@example.com')
                        ->setPersonName('Recipient Person Name')
                        ->setPhoneNumber('123-123-1234')
                )
                ->setDeliveryInstructions('Delivery Instructions')
                ->setTins(
                    [
                        (new \FedEx\OpenShipService\ComplexType\OpenShipTaxpayerIdentification())
                            ->setTinType(\FedEx\OpenShipService\SimpleType\OpenShipTinType::_PERSONAL_STATE)
                            ->setNumber('Recipientvat_TAX')
                    ]
                )
            ]
        )
        ->setShippingChargesPayment(
            (new OpenShipPayment())
                ->setPaymentType(\FedEx\OpenShipService\SimpleType\OpenShipPaymentType::_SENDER)
        )
            ->setCustomsClearanceDetail(
                (new OpenShipCustomsClearanceDetail())
                ->setCommercialInvoice(
                    (new OpenShipCommercialInvoice)
                    ->setTermsOfSale('DAP')
                    ->setShipmentPurpose(\FedEx\OpenShipService\SimpleType\OpenShipShipmentPurpose::_PERSONAL_EFFECTS)
                )
                ->setCommodities(
                    [
                        (new \FedEx\OpenShipService\ComplexType\OpenShipCommodity())
                            ->setName("product 1")
                            ->setDescription("Product 1")
                            ->setQuantity(1)
                            ->setHarmonizedCode("HS_CODE213213")
                            ->setUnitPrice(
                                (new OpenShipMoney())
                                    ->setAmount(1.0)
                                    ->setCurrency("USD")
                            ),
                        (new \FedEx\OpenShipService\ComplexType\OpenShipCommodity())
                            ->setName("product 2")
                            ->setDescription("Product 2")
                            ->setQuantity(1)
                            ->setHarmonizedCode("HS_CODE2123213")
                            ->setUnitPrice(
                                (new OpenShipMoney())
                                    ->setAmount(3.0)
                                    ->setCurrency("USD")
                            )
                    ]
                )
            )
        ->setRequestedPackageLineItems(
            [
                (new \FedEx\OpenShipService\ComplexType\OpenShipRequestedPackageLineItem())
                ->setWeight(
                    (new OpenShipWeight())
                    ->setValue(1.22)
                    ->setUnits('KG')
                ),
                (new \FedEx\OpenShipService\ComplexType\OpenShipRequestedPackageLineItem())
                    ->setWeight(
                        (new OpenShipWeight())
                            ->setValue(1.22)
                            ->setUnits('KG')
                    )
            ]
        )
    )
);

var_dump($fedexOpenShipReply);

/********************************
 * Add a package to open shipment
 ********************************/

$addPackagesToOpenShipmentReply = $fedexOpenShipService->modifyOpenShipmentPackages(
    (new ModifyOpenShipmentPackagesRequest())
    ->setIndex($index)
    ->setTrackingId(
        (new OpenShipTrackingId())
        ->setTrackingNumber('43634643643')
    )
    ->setAccountNumber(
        (new OpenShipPartyAccountNumber())
        ->setValue($fedexOpenShipService->getAccountId())
    )
    ->setShipAction(\FedEx\OpenShipService\SimpleType\OpenShipOpenShipmentAction::_WEAK_VALIDATION)
    ->setRequestedPackageLineItem(
        (new OpenShipRequestedPackageLineItem())
        ->setSequenceNumber(2)
        ->setWeight(
            (new OpenShipWeight())
            ->setUnits(\FedEx\OpenShipService\SimpleType\OpenShipUnits::_KG)
            ->setValue(1.001)
        )
        ->setItemDescription('New package added to open shipment')
        ->setDimensions(
            (new OpenShipDimensions())
            ->setUnits("CM")
            ->setLength(12)
            ->setHeight(10)
            ->setWidth(7)
        )
    )
);


var_dump($addPackagesToOpenShipmentReply);

/************************************
 * Retrieve the open shipment details
 ************************************/

$retrieveOpenShipmentReply = $fedexOpenShipService->retrieveOpenShipment(
    (new RetrieveOpenShipmentRequest())
    ->setAccountNumber(
        (new OpenShipPartyAccountNumber())
        ->setValue($fedexOpenShipService->getAccountId())
    )
    ->setIndex($index)
);

var_dump($retrieveOpenShipmentReply);

/***********************
 * Confirm open shipment
 ***********************/

$retrieveOpenShipmentReply = $fedexOpenShipService->confirmOpenShipment(
    (new ConfirmOpenShipmentRequest())
    ->setIndex($index)
    ->setLabelResponseOptions(\FedEx\OpenShipService\SimpleType\OpenShipLabelResponseOptions::_URL_ONLY)
    ->setAccountNumber(
        (new OpenShipPartyAccountNumber())
        ->setValue($fedexOpenShipService->getAccountId())
    )
    ->setLabelSpecification(
        (new OpenShipLabelSpecification())
        ->setLabelFormatType(\FedEx\OpenShipService\SimpleType\OpenShipLabelFormatType::_COMMON2D)
        ->setLabelOrder(\FedEx\OpenShipService\SimpleType\OpenShipLabelOrder::_SHIPPING_LABEL_FIRST)
        ->setLabelStockType(\FedEx\OpenShipService\SimpleType\OpenShipLabelStockType::_STOCK_4X6)
        ->setImageType(\FedEx\OpenShipService\SimpleType\OpenShipImageType::_PDF)
    )
    ->setEdtRequestType(\FedEx\OpenShipService\SimpleType\OpenShipEdtRequestType::_ALL)
);

var_dump($retrieveOpenShipmentReply);

