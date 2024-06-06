<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;

use FedEx\ShipService\ComplexType\ShipCommercialInvoice;
use FedEx\ShipService\ComplexType\ShipCustomsClearanceDetail;
use FedEx\ShipService\ComplexType\ShipDimensions;
use FedEx\ShipService\ComplexType\ShipLabelSpecification;
use FedEx\ShipService\ComplexType\ShipMoney;
use FedEx\ShipService\ComplexType\ShipPartyAddress;
use FedEx\ShipService\ComplexType\ShipPartyContact;
use FedEx\ShipService\ComplexType\ShipRequestedShipment;
use FedEx\ShipService\ComplexType\ShipShipperAccountNumber;
use FedEx\ShipService\ComplexType\ShipWeight;
use FedEx\ShipService\Request as FedexShipmentRequest;

use FedEx\ShipService;
use FedEx\ShipService\ComplexType;
use FedEx\ShipService\SimpleType;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse){
    $accessToken = $ratesReply->getAccessToken();
}else{
    var_dump("Auth Error",$ratesReply->getErrors());
    die;
}

$shipRequest = new ComplexType\CreateShipmentRequest();
//authentication & client details
$shipServiceRequest = new FedexShipmentRequest();
$shipServiceRequest->setAccessToken($accessToken);


$shipRequest->setRequestedShipment(
    (new ShipRequestedShipment())
    ->setTotalDeclaredValue(
        (new ComplexType\ShipMoney())
        ->setAmount(10.09)
        ->setCurrency("USD")
    )
    ->setShipDatestamp(date('Y-m-d'))
    ->setShipper(
        (new ComplexType\ShipShipperParty())
        ->setAddress(
            (new ShipPartyAddress())
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
            (new ShipPartyContact())
            ->setCompanyName('Company Name')
            ->setEmailAddress('test@example.com')
            ->setPersonName('Person Name')
            ->setPhoneNumber('123-123-1234')
        )
        ->setTins([
            (new ComplexType\ShipTaxpayerIdentification())
            ->setTinType(SimpleType\ShipTinType::_PERSONAL_STATE)
            ->setNumber('vat_TAX')
        ])
    )
    ->setRecipients(
        [
            (new ComplexType\ShipRecipientsParty())
                ->setAddress(
                    (new ShipPartyAddress())
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
                    (new ShipPartyContact())
                        ->setCompanyName('Recipient Company Name')
                        ->setEmailAddress('Recipienttest@example.com')
                        ->setPersonName('Recipient Person Name')
                        ->setPhoneNumber('123-123-1234')
                )
                ->setTins([
                    (new ComplexType\ShipTaxpayerIdentification())
                        ->setTinType(SimpleType\ShipTinType::_PERSONAL_STATE)
                        ->setNumber('Recipientvat_TAX')
                ])
        ]
    )
    ->setPickupType(SimpleType\ShipPickupType::_USE_SCHEDULED_PICKUP)
    ->setServiceType('STANDARD_OVERNIGHT')
    ->setPackagingType('YOUR_PACKAGING')
    ->setShippingChargesPayment(
        (new ComplexType\ShipPayment())
        ->setPaymentType(SimpleType\ShipPaymentType::_SENDER)
        )
        ->setShipmentSpecialServices(
            (new ComplexType\ShipShipmentSpecialServicesRequested())
                ->setSpecialServiceTypes([])
            ->setEtdDetail(
                (new ComplexType\ShipETDDetail())
                ->setAttributes(
                [SimpleType\ShipAttributes::_POST_SHIPMENT_UPLOAD_REQUESTED])
            )
        )
    ->setCustomsClearanceDetail(
        (new ShipCustomsClearanceDetail())
        ->setCommercialInvoice(
            (new ShipCommercialInvoice())
            ->setTermsOfSale('DAP')
            ->setShipmentPurpose(SimpleType\ShipShipmentPurpose::_PERSONAL_EFFECTS)
        )
        ->setCommodities(
            [
                (new ComplexType\ShipCommodity())
                ->setName("product 1")
                ->setDescription("Product 1")
                ->setQuantity(1)
                ->setHarmonizedCode("HS_CODE213213")
                ->setUnitPrice(
                    (new ComplexType\ShipMoney())
                    ->setAmount(1.0)
                    ->setCurrency("USD")
                ),
                (new ComplexType\ShipCommodity())
                    ->setName("product 2")
                    ->setDescription("Product 2")
                    ->setQuantity(3)
                    ->setHarmonizedCode("HS_CODE213213")
                    ->setUnitPrice(
                        (new ComplexType\ShipMoney())
                            ->setAmount(1.0)
                            ->setCurrency("USD")
                    )
            ]
        )

    )
    ->setLabelSpecification(
        (new ShipLabelSpecification())
        ->setLabelFormatType(SimpleType\ShipLabelFormatType::_COMMON2D)
        ->setLabelStockType(SimpleType\ShipLabelStockType::_PAPER_4X6)
        ->setImageType(SimpleType\ShipImageType::_PDF)
    )
    ->setTotalPackageCount(1)
    ->setRequestedPackageLineItems(
        [
            (new ComplexType\ShipRequestedPackageLineItem())
            ->setDeclaredValue(
                (new ShipMoney)
                ->setAmount(1.00)
                ->setCurrency('USD')
            )
            ->setWeight(
                (new ShipWeight())
                ->setUnits(SimpleType\ShipUnits::_KG)
                ->setValue(0.111)
            )
            ->setDimensions(
                (new ShipDimensions())
                ->setUnits("CM")
                ->setHeight(1)
                ->setLength(3)
                ->setWidth(4)
            )
            ->setItemDescription("Product 1 description"),
            (new ComplexType\ShipRequestedPackageLineItem())
                ->setDeclaredValue(
                    (new ShipMoney)
                        ->setAmount(3.00)
                        ->setCurrency('USD')
                )
                ->setWeight(
                    (new ShipWeight())
                        ->setUnits(SimpleType\ShipUnits::_KG)
                        ->setValue(0.111)
                )
                ->setDimensions(
                    (new ShipDimensions())
                        ->setUnits("CM")
                        ->setHeight(1)
                        ->setLength(3)
                        ->setWidth(4)
                )
                ->setItemDescription("Product 2 description")
        ]
    )
)
->setLabelResponseOptions(
    SimpleType\ShipLabelResponseOptions::_LABEL
)
->setAccountNumber(
    (new ShipShipperAccountNumber())
    ->setValue($shipServiceRequest->getAccountId())
);




$shipReply = $shipServiceRequest->createShipment($shipRequest);


var_dump($shipReply);
