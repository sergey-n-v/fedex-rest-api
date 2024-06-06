<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;
use FedEx\ETDService\ComplexType\EtdETDUploadRequest;
use FedEx\ETDService\ComplexType\EtdMetaObject;
use FedEx\ETDService\ComplexType\EtdsUploadRequest;
use FedEx\ETDService\Request as FedexEtdService;
use FedEx\ETDService\SimpleType\EtdContentType;
use FedEx\ETDService\SimpleType\EtdShipDocumentType;
use FedEx\ETDService\SimpleType\EtdWorkflowName;

$authorizationRequest = new FedexAuthorizationRequest();
$ratesReply = $authorizationRequest->authorize();

$accessToken = '';
if ($ratesReply instanceof AuthResponse){
    $accessToken = $ratesReply->getAccessToken();
}else{
    var_dump("Auth Error",$ratesReply->getErrors());
    die;
}
$etdService = new FedexEtdService();
$etdService->setAccessToken($accessToken);

$request = (new EtdsUploadRequest())
    ->setAttachment(__DIR__ . '/CommercialInvoice.xls')
    ->setDocument(
        (new EtdETDUploadRequest())
        ->setWorkflowName(EtdWorkflowName::_ETDPOSTSHIPMENT)
        ->setName('CommercialInvoice.xls')
        ->setContentType(EtdContentType::_APPLICATION_VND_MS_EXCEL)
            ->setCarrierCode(\FedEx\ETDService\SimpleType\EtdCarrierCode::_FDXE)
        ->setMeta(
            (new EtdMetaObject())
                ->setTrackingNumber('43543523532')
                ->setShipmentDate(date('c'))
            ->setShipDocumentType(EtdShipDocumentType::_COMMERCIAL_INVOICE)
            ->setOriginCountryCode("UA")
            ->setDestinationCountryCode("US")
        )
    );

$etdReply = $etdService->etdsUpload($request);

var_dump('$etdReply',$etdReply);
