<?php

namespace FedEx\Tests;

use FedEx\AddressValidationService\ComplexType\AddressValidationAdvcResponseVO;
use FedEx\AddressValidationService\ComplexType;
use PHPUnit\Framework\TestCase;

class AddressValidationTest extends TestCase
{
    /**
     * Test for handling an authentication error.
     */
    public function testAddressValidationWithoutApi200()
    {
        $response = json_decode(file_get_contents('tests/mock-responses/address-validation/response200.json'));

        $reply = new AddressValidationAdvcResponseVO();

        $reply->populateFromStdClass($response);
        $this->assertSame("STANDARDIZED", $reply->getOutput()->getResolvedAddresses()[0]->getAttributes()['AddressType']);
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAddressValidationWithoutApi($a,  $expected)
    {
        $response = json_decode(file_get_contents('tests/mock-responses/address-validation/response'.$a.'.json'));

        switch ($a):
            case 401:
                $reply = new ComplexType\AddressValidationErrorResponseVO401();
                break;
            case 403:
                $reply = new ComplexType\AddressValidationErrorResponseVO403();
                break;
            case 404:
                $reply = new ComplexType\AddressValidationErrorResponseVO404();
                break;
            case 500:
                $reply = new ComplexType\AddressValidationErrorResponseVO500();
                break;
            case 503:
                $reply = new ComplexType\AddressValidationErrorResponseVO503();
                break;
            default:
                $reply = new ComplexType\AddressValidationErrorResponseVO();
        endswitch;

        $reply->populateFromStdClass($response);
        foreach ($reply->getErrors() as $error){
            $this->assertSame($expected, $error->getCode());
        }

    }

    public function additionProvider()
    {
        return[
            [400,"STANDARDIZED.ADDRESS.NOTFOUND"],
            [401,"NOT.AUTHORIZED.ERROR"],
            [403,"FORBIDDEN.ERROR"],
            [404,"NOT.FOUND.ERROR"],
            [500,"INTERNAL.SERVER.ERROR"],
            [503,"SERVICE.UNAVAILABLE.ERROR"],
        ];
    }
}
