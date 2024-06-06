<?php


namespace FedEx\AvailabilityService;


use FedEx\AbstractRequest;
use FedEx\AvailabilityService\ComplexType\PackageAndServiceOptionsRequest;
use FedEx\AvailabilityService\ComplexType\SpecialServiceOptionsRequest;
use FedEx\AvailabilityService\ComplexType\TransitTimesRequest;
use FedEx\Exceptions\MissingAccessTokenException;

class Request extends AbstractRequest
{

    public function setApiEndpoint()
    {
        return '/availability/v1';
    }


    /**
     * Retrieve Services and Transit Times
     *
     * This endpoint gives the estimated transit times for a particular shipment.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param TransitTimesRequest $request
     * @return ComplexType\AvErrorResponseVO|ComplexType\AvErrorResponseVO_2|ComplexType\AvTransitTimeOutputVO|mixed|\Psr\Http\Message\ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function transitTimes( $request)
    {
        $this->api_endpoint .= '/transittimes';
        $this->setData($request->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\AvTransitTimeOutputVO();
                break;
            case 403:
            case 500:
                $trackReply = new ComplexType\AvErrorResponseVO_2();
                break;
            default:
                $trackReply = new ComplexType\AvErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Retrieve Services and Packaging Options
     *
     * Use this endpoint to return a list of all FedEx Express or FedEx Ground services and packaging type
     * combinations that are available between the input origin and destination and subpackaging information.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param PackageAndServiceOptionsRequest $request
     * @return ComplexType\AvCmdcResponseVO|ComplexType\AvErrorResponseVO401|ComplexType\AvErrorResponseVO403|ComplexType\AvErrorResponseVO404|ComplexType\AvErrorResponseVO500|ComplexType\AvErrorResponseVO503|ComplexType\AvErrorResponseVO_2|mixed|\Psr\Http\Message\ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function packageAndServiceOptions( $request)
    {
        $this->api_endpoint .= '/packageandserviceoptions';
        $this->setData($request->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\AvCmdcResponseVO();
                break;
            case 401:
                $trackReply = new ComplexType\AvErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\AvErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\AvErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\AvErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\AvErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\AvErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Retrieve Special Service Options
     *
     * Use this endpoint to request list of all available FedEx services, shipment special,
     * service options along with delivery signature options and return shipment types that are available between an origin and destination.
     * You can filter the results using FedEx carrier code(s) and/or service type(s) for specific services.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param SpecialServiceOptionsRequest $request
     * @return ComplexType\AvAvailabilitycxsResponseVO|ComplexType\AvErrorResponseVO|ComplexType\AvErrorResponseVO401|ComplexType\AvErrorResponseVO403|ComplexType\AvErrorResponseVO404|ComplexType\AvErrorResponseVO500|ComplexType\AvErrorResponseVO503|mixed|\Psr\Http\Message\ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function specialServiceOptions( $request)
    {
        $this->api_endpoint .= '/specialserviceoptions';
        $this->setData($request->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\AvAvailabilitycxsResponseVO();
                break;
            case 401:
                $trackReply = new ComplexType\AvErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\AvErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\AvErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\AvErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\AvErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\AvErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }
}
