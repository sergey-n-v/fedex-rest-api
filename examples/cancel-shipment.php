<?php

require_once 'credentials.php';
require_once 'bootstrap.php';


use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;


use FedExRestApi\ShipService\ComplexType\CancelShipmentRequest;
use FedExRestApi\ShipService\ComplexType\ShipShipperAccountNumber;
use FedExRestApi\ShipService\Request as FedexShipmentRequest;


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
$shipServiceRequest = new FedexShipmentRequest();
$shipServiceRequest->setAccessToken($accessToken);

$deleteShipmentReply =  $shipServiceRequest->cancelShipment(
    (new CancelShipmentRequest())
    ->setTrackingNumber('54364363463')
    ->setAccountNumber(
        (new ShipShipperAccountNumber())
        ->setValue($shipServiceRequest->getAccountId())
    )
    ->setEmailShipment(false)
    ->setSenderCountryCode("US")
    ->setDeletionControl(\FedExRestApi\ShipService\SimpleType\ShipDeletionControl::_DELETE_ALL_PACKAGES)
);

    var_dump($deleteShipmentReply);

