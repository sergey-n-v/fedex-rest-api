<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use FedExRestApi\ETDService\ComplexType\EtdETDUploadRequest;
use FedExRestApi\ETDService\ComplexType\EtdMetaObject;
use FedExRestApi\ETDService\ComplexType\EtdsUploadRequest;
use FedExRestApi\ETDService\Request as FedexEtdService;
use FedExRestApi\ETDService\SimpleType\EtdContentType;
use FedExRestApi\ETDService\SimpleType\EtdShipDocumentType;
use FedExRestApi\ETDService\SimpleType\EtdWorkflowName;

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
            ->setCarrierCode(\FedExRestApi\ETDService\SimpleType\EtdCarrierCode::_FDXE)
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
