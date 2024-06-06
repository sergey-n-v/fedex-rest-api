<?php

namespace FedExRestApi\Tests;


use FedExRestApi\ShipService\ComplexType;
use PHPUnit\Framework\TestCase;

class ShipTest extends TestCase
{
    /**
     * Test for handling an authentication error.
     */
    public function testShipmentCreateWithoutApi200()
    {
        $response = json_decode(file_get_contents('tests/mock-responses/shipment/create/response200.json'));

        $reply = new ComplexType\ShipSHPCResponseVO_ShipShipment();

        $reply->populateFromStdClass($response);

        $this->assertSame("794953535000", $reply->getOutput()->getTransactionShipments()[0]->getMasterTrackingNumber());
    }

    /**
     * @dataProvider additionProviderShipmentCreate
     */
    public function testShipmentCreateWithoutApi($a,  $expected)
    {
        $response = json_decode(file_get_contents('tests/mock-responses/shipment/create/response'.$a.'.json'));

        switch ($a):
            case 401:
                $reply = new ComplexType\ShipErrorResponseVO401();
                break;
            case 403:
                $reply = new ComplexType\ShipErrorResponseVO403();
                break;
            case 404:
                $reply = new ComplexType\ShipErrorResponseVO404();
                break;
            case 500:
                $reply = new ComplexType\ShipErrorResponseVO500();
                break;
            case 503:
                $reply = new ComplexType\ShipErrorResponseVO503();
                break;
            default:
                $reply = new ComplexType\ShipErrorResponseVO();
        endswitch;

        $reply->populateFromStdClass($response);
        foreach ($reply->getErrors() as $error){
            $this->assertSame($expected, $error->getCode());
        }

    }

    static  public function additionProviderShipmentCreate()
    {
        return[
            [400,"ACCOUNTNUMBER.REGISTRATION.REQUIRED"],
            [401,"NOT.AUTHORIZED.ERROR"],
            [403,"NOT.AUTHORIZED.ERROR"],
            [404,"NOT.FOUND.ERROR"],
            [500,"INTERNAL.SERVER.ERROR"],
            [503,"SERVICE.UNAVAILABLE.ERROR"],
        ];
    }

    /**
     * Test for handling an authentication error.
     */
    public function testShipmentCancelWithoutApi200()
    {
        $response = json_decode(file_get_contents('tests/mock-responses/shipment/cancel/response200.json'));

        $reply = new ComplexType\ShipSHPCResponseVO_CancelShipment();

        $reply->populateFromStdClass($response);
        $this->assertSame("Success", $reply->getOutput()->getSuccessMessage());
    }

    /**
     * @dataProvider additionProviderShipmentCancel
     */
    public function testShipmentCancelWithoutApi($a,  $expected)
    {
        $response = json_decode(file_get_contents('tests/mock-responses/shipment/cancel/response'.$a.'.json'));

        switch ($a):
            case 401:
                $shipReply = new ComplexType\ShipErrorResponseVO401_2();
                break;
            case 403:
                $shipReply = new ComplexType\ShipErrorResponseVO403_2();
                break;
            case 404:
                $shipReply = new ComplexType\ShipErrorResponseVO404_2();
                break;
            case 500:
                $shipReply = new ComplexType\ShipErrorResponseVO500_2();
                break;
            case 503:
                $shipReply = new ComplexType\ShipErrorResponseVO503_2();
                break;
            default:
                $shipReply = new ComplexType\ShipErrorResponseVO_2();
                break;
        endswitch;

        $shipReply->populateFromStdClass($response);
        foreach ($shipReply->getErrors() as $error){
            $this->assertSame($expected, $error->getCode());
        }

    }

    static  public function additionProviderShipmentCancel()
    {
        return[
            [400,"SHIPMENT.USER.UNAUTHORIZED"],
            [401,"NOT.AUTHORIZED.ERROR"],
            [403,"FORBIDDEN.ERROR"],
            [404,"NOT.FOUND.ERROR"],
            [500,"INTERNAL.SERVER.ERROR"],
            [503,"SERVICE.UNAVAILABLE.ERROR"],
        ];
    }
}
