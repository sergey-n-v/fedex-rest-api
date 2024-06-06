<?php

namespace FedExRestApi\Tests;

use FedExRestApi\AuthorizationService\ComplexType\AuthErrorResponseVO;
use FedExRestApi\AuthorizationService\ComplexType\AuthResponse;
use FedExRestApi\AuthorizationService\Request as FedexAuthorizationRequest;
use PHPUnit\Framework\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * Test for handling an authentication error.
     */
    public function testAuthenticationFailedWithApi()
    {

        $authorizationRequest = new FedexAuthorizationRequest();
        $ratesReply = $authorizationRequest
            ->setClientId('4363263262')
            ->setClientSecret('dfbsd4532')
        ->authorize();

        $this->assertInstanceOf(AuthErrorResponseVO::class, $ratesReply);
    }

    /**
     * Test for handling an authentication error.
     */
    public function testAuthenticationWithoutApi200()
    {
        $response = json_decode(file_get_contents('tests/mock-responses/authentification/response200.json'));

            $reply = new AuthResponse();

        $reply->populateFromStdClass($response);

        $this->assertSame("eyJhbGciOiJIUzI1NiIsInR5cCI6IkpX……", $reply->getAccessToken());
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAuthenticationWithoutApi($a,  $expected)
    {
        $response = json_decode(file_get_contents('tests/mock-responses/authentification/response'.$a.'.json'));

        $reply = new AuthErrorResponseVO();

        $reply->populateFromStdClass($response);
        foreach ($reply->getErrors() as $error){
                 $this->assertSame($expected, $error->getCode());
        }

    }

    static  public function additionProvider()
    {
        return[
            [401,"NOT.AUTHORIZED.ERROR"],
            [500,"INTERNAL.SERVER.ERROR"],
            [503,"SERVICE.UNAVAILABLE.ERROR"],
        ];
    }
}
