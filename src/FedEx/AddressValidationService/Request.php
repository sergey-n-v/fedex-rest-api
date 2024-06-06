<?php


namespace FedEx\AddressValidationService;


use FedEx\AbstractRequest;
use FedEx\AddressValidationService\ComplexType\AddressValidationRequest;

class Request extends AbstractRequest
{

    public function setApiEndpoint()
    {
        return '/address/v1';
    }

    /**
     * Validate Address
     *
     * Use this endpoint to get address resolution details. These details are the outcome of validation and
     * resolution of the input address. An address is stated as
     * resolved when the input address matches the known reference data...
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.<i>
     *
     * @param AddressValidationRequest $trackRequest
     * @return ComplexType\AddressValidationAdvcResponseVO|ComplexType\AddressValidationErrorResponseVO401|ComplexType\AddressValidationErrorResponseVO403|ComplexType\AddressValidationErrorResponseVO404|ComplexType\AddressValidationErrorResponseVO500|ComplexType\AddressValidationErrorResponseVO503|mixed|\Psr\Http\Message\ResponseInterface|null
     * @throws \FedEx\Exceptions\MissingAccessTokenException
     */
    public function validateAddress( $trackRequest)
    {
        $this->api_endpoint .= '/addresses/resolve"';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\AddressValidationAdvcResponseVO();
                break;
            case 401:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\AddressValidationErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }
}
