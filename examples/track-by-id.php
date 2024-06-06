<?php
//remember to copy example.credentials.php as credentials.php replace 'FEDEX_KEY', 'FEDEX_PASSWORD', 'FEDEX_ACCOUNT_NUMBER', and 'FEDEX_METER_NUMBER'
require_once 'credentials.php';
require_once 'bootstrap.php';

use FedEx\AuthorizationService\ComplexType\AuthResponse;
use FedEx\AuthorizationService\Request as FedexAuthorizationRequest;
use FedEx\TrackService\ComplexType\TrackingNumbersRequest;
use FedEx\TrackService\ComplexType\TrackTrackingNumberInfo;
use FedEx\TrackService\ComplexType;

use FedEx\TrackService\Request as FedexTrackService;
$trackingId1 = 123456789012;
$trackingId2 = 123456789012;


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
$trackServiceRequest = new FedexTrackService();
$trackServiceRequest->setAccessToken($accessToken);

$trackReply = $trackServiceRequest->trackingNumbers(
    (new TrackingNumbersRequest())
        ->setIncludeDetailedScans(true)
    ->setTrackingInfo([
        (new ComplexType\TrackTrackingInfo())
        ->setTrackingNumberInfo(
            (new TrackTrackingNumberInfo())
            ->setTrackingNumber($trackingId1)
        ),
        (new ComplexType\TrackTrackingInfo())
            ->setTrackingNumberInfo(
                (new TrackTrackingNumberInfo())
                    ->setTrackingNumber($trackingId2)
            )
    ])
);

var_dump($trackReply);
