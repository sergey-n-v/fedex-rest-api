<?php


namespace FedEx\PickupService;


use FedEx\AbstractRequest;
use FedEx\Exceptions\MissingAccessTokenException;
use FedEx\PickupService\ComplexType\CancelPickupRequest;
use FedEx\PickupService\ComplexType\CheckPickupAvailabilityRequest;
use FedEx\PickupService\ComplexType\CreatePickupRequest;
use FedEx\Utility\RequestMethod;
use Psr\Http\Message\ResponseInterface;

class Request extends AbstractRequest
{

    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/pickup/v1';
    }


    /**
     * Create Pickup
     *
     * Use this endpoint to create a pickup request for a package.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CreatePickupRequest $trackRequest
     * @return ComplexType\PickupErrorResponseVO403|ComplexType\PickupErrorResponseVO404|ComplexType\PickupErrorResponseVO500|ComplexType\PickupErrorResponseVO503|ComplexType\PickupPudcResponseVO_CreatePickup|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function createPickup( $trackRequest)
    {
        $this->api_endpoint .= '/pickups';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\PickupPudcResponseVO_CreatePickup();
                break;
            case 401:
                 $trackReply = new ComplexType\PickupErrorResponseVO401();
            break;
            case 403:
                $trackReply = new ComplexType\PickupErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\PickupErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\PickupErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\PickupErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\PickupErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Check Pickup Availability
     *
     * Use this endpoint to check the availability of a pickup service.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CheckPickupAvailabilityRequest $trackRequest
     * @return ComplexType\PickupErrorResponseVO404|ComplexType\PickupErrorResponseVO500|ComplexType\PickupErrorResponseVO503|ComplexType\PickupErrorResponseVO_2|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function checkPickupAvailability( $trackRequest)
    {
        $this->api_endpoint .= '/pickups/availabilities';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\PickupPudcResponseVO_PickupAvailability();
                break;
            case 401:
                $trackReply = new ComplexType\PickupErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\PickupErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\PickupErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\PickupErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\PickupErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\PickupErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Cancel Pickup
     *
     * Use this endpoint to cancel the already scheduled pickup request. <br>Note: A failure notification will be sent if you attempt to cancel a pickup after the FedEx courier has been dispatched to the pickup location.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CancelPickupRequest $trackRequest
     * @return ComplexType\PickupErrorResponseVO404|ComplexType\PickupErrorResponseVO500|ComplexType\PickupErrorResponseVO503|ComplexType\PickupErrorResponseVO_2|ComplexType\PickupPudcResponseVO_CancelPickup|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     *
     */
    public function cancelPickup( $trackRequest)
    {
        $this->api_endpoint .= '/pickups/cancel';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\PickupPudcResponseVO_CancelPickup();
                break;
            case 401:
                $trackReply = new ComplexType\PickupErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\PickupErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\PickupErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\PickupErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\PickupErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\PickupErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }
}
