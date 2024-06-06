<?php


namespace FedEx\RateService;


use Exception;
use FedEx\AbstractRequest;
use FedEx\Exceptions\MissingAccessTokenException;
use GuzzleHttp\Exception\ClientException;

class Request extends AbstractRequest
{
    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/rate/v1/rates/quotes';
    }


    /**
     * @throws MissingAccessTokenException
     */
    public function getRate($rateRequest)
    {
        $this->setData($rateRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $rateReply = new ComplexType\RateRatcResponseVO();
                break;
            case 401:
                $rateReply = new ComplexType\RateErrorResponseVO401();
                break;
            case 403:
                $rateReply = new ComplexType\RateErrorResponseVO403();
                break;
            case 404:
                $rateReply = new ComplexType\RateErrorResponseVO404();
                break;
            case 500:
                $rateReply = new ComplexType\RateErrorResponseVO500();
                break;
            case 503:
                $rateReply = new ComplexType\RateErrorResponseVO503();
                break;
            default:
                $rateReply = new ComplexType\RateErrorResponseVO();
                break;
        endswitch;

        $rateReply->populateFromStdClass($response);
        return $rateReply;
    }
}
