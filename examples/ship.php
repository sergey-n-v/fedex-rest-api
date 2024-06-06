<?php
/**
 * This test will send the same test data as in FedEx's documentation:
 * /php/RateAvailableServices/RateAvailableServices.php5
 */

//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;

use FedExRestApi\ShipService\ComplexType\ShipCommercialInvoice;
use FedExRestApi\ShipService\ComplexType\ShipCustomsClearanceDetail;
use FedExRestApi\ShipService\ComplexType\ShipDimensions;
use FedExRestApi\ShipService\ComplexType\ShipLabelSpecification;
use FedExRestApi\ShipService\ComplexType\ShipMoney;
use FedExRestApi\ShipService\ComplexType\ShipPartyAddress;
use FedExRestApi\ShipService\ComplexType\ShipPartyContact;
use FedExRestApi\ShipService\ComplexType\ShipRequestedShipment;
use FedExRestApi\ShipService\ComplexType\ShipShipperAccountNumber;
use FedExRestApi\ShipService\ComplexType\ShipWeight;
use FedExRestApi\ShipService\Request as FedexShipmentRequest;

use FedExRestApi\ShipService;
use FedExRestApi\ShipService\ComplexType;
use FedExRestApi\ShipService\SimpleType;

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
