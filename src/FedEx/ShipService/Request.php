<?php


namespace FedEx\ShipService;


use FedEx\AbstractRequest;
use FedEx\Exceptions\MissingAccessTokenException;
use FedEx\ShipService\ComplexType\CancelShipmentRequest;
use FedEx\ShipService\ComplexType\CreateShipmentRequest;
use FedEx\ShipService\ComplexType\CreateTagShipmentRequest;
use FedEx\ShipService\ComplexType\PackageValidateShipmentRequest;
use FedEx\ShipService\ComplexType\ResultsShipmentRequest;
use FedEx\Utility\RequestMethod;
use GuzzleHttp\Exception\ClientException;

class Request extends AbstractRequest
{

    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/ship/v1/shipments';
    }


    /**
     * Create Shipment
     * This endpoint helps you to create shipment requests therebyy validating all the shippingg input information and either generates the labels (if the responses is synchronous) or a job ID if transaction is processed using asynchronous method.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     * @param CreateShipmentRequest $rateRequest
     * @return ComplexType\ShipErrorResponseVO401|ComplexType\ShipErrorResponseVO404|ComplexType\ShipErrorResponseVO500|ComplexType\ShipErrorResponseVO503|ComplexType\ShipSHPCResponseVO_ShipShipment|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function createShipment( $rateRequest)
    {

        $this->setData($rateRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO_ShipShipment();
                break;
            case 401:
                $shipReply = new ComplexType\ShipErrorResponseVO401();
                break;
            case 403:
                $shipReply = new ComplexType\ShipErrorResponseVO403();
                break;
            case 404:
                $shipReply = new ComplexType\ShipErrorResponseVO404();
                break;
            case 500:
                $shipReply = new ComplexType\ShipErrorResponseVO500();
                break;
            case 503:
                $shipReply = new ComplexType\ShipErrorResponseVO503();
                break;
            default:
                $shipReply = new ComplexType\ShipErrorResponseVO();
        endswitch;

        $shipReply->populateFromStdClass($response);
        return $shipReply;
    }


    /**
     *
     * Cancel Shipment
     * Use this endpoint to cancel FedEx Express and Ground shipments that have not already been tendered to FedEx. This request will cancel all packages within the shipment.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CancelShipmentRequest $shipRequest
     * @return ComplexType\ShipErrorResponseVO401_2|ComplexType\ShipErrorResponseVO403_2|ComplexType\ShipErrorResponseVO404_2|ComplexType\ShipErrorResponseVO500_2|ComplexType\ShipErrorResponseVO503_2|ComplexType\ShipErrorResponseVO_2|ComplexType\ShipSHPCResponseVO_CancelShipment|mixed|\Psr\Http\Message\ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function cancelShipment( $shipRequest)
    {
        $this->api_endpoint .= '/cancel';

        $this->setData($shipRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO_CancelShipment();
                break;
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
        return $shipReply;
    }

    /**
     * Retrieve Async Ship
     * This endpoint helps you to process confirmed shipments asynchronously (above 40 packages) and produce results based on job id.<br><i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     * @param ResultsShipmentRequest $shipRequest
     * @return ComplexType\ShipErrorResponseVO401_2|ComplexType\ShipErrorResponseVO403_2|ComplexType\ShipErrorResponseVO404_2|ComplexType\ShipErrorResponseVO500_2|ComplexType\ShipErrorResponseVO503_2|ComplexType\ShipErrorResponseVO_2|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     *
     */
    public function resultsShipment( $shipRequest)
    {
        $this->api_endpoint .= '/results';

        $this->setData($shipRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO_GetOpenShipmentResults();
                break;
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
        return $shipReply;
    }

    /**
     * Validate Shipment
     * Use this endpoint to verify the accuracy of a shipment request prior to actually submitting shipment request.
     * This allow businesses that receive shipping orders from end-user/customers to verify the shipment information prior to submitting a create shipment request to FedEx and printing a label.
     * If for any reason the information needs to be edited or changed, it can be done while the end-user is still available to confirm the changes.
     * <br><br>Note:
     * <ul>
     * <li>This is shipment level validation hence supports validation for single piece shipment only.</li>
     * <li>Shipment validation is supported for all Express and Ground - Domestic as well as international shipments with all applicable special services. </li>
     * <li>Shipment validation is supported for SmartPost and not for Freight LTL shipments.</li>
     * </ul>
     * <br><br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param PackageValidateShipmentRequest $shipRequest
     * @return ComplexType\ShipErrorResponseVO401_2|ComplexType\ShipErrorResponseVO403_2|ComplexType\ShipErrorResponseVO404_2|ComplexType\ShipErrorResponseVO500_2|ComplexType\ShipErrorResponseVO503_2|ComplexType\ShipErrorResponseVO_2|ComplexType\ShipSHPCResponseVO_Validate|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     *
     */
    public function packageValidateShipment( $shipRequest)
    {
        $this->api_endpoint .= '/packages/validate';

        $this->setData($shipRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO_Validate();
                break;
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
        return $shipReply;
    }

    /**
     * Create Tag
     *
     * FedEx creates and delivers a return shipping label to your customer and collects the item for return.
     * Your customer needs to have the package ready for pickup when the FedEx driver arrives.
     * Use this endpoint to create tag requests for FedEx Express and FedEx Ground shipments.<br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CreateTagShipmentRequest $shipRequest
     * @return ComplexType\ShipErrorResponseVO401|ComplexType\ShipErrorResponseVO404|ComplexType\ShipErrorResponseVO500|ComplexType\ShipErrorResponseVO503|ComplexType\ShipSHPCResponseVO_CreateTag|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function createTagShipment( $shipRequest)
    {
        $this->api_endpoint .= '/tag';

        $this->setData($shipRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO_CreateTag();
                break;
            case 401:
                $shipReply = new ComplexType\ShipErrorResponseVO401();
                break;
            case 403:
                $shipReply = new ComplexType\ShipErrorResponseVO403();
                break;
            case 404:
                $shipReply = new ComplexType\ShipErrorResponseVO404();
                break;
            case 500:
                $shipReply = new ComplexType\ShipErrorResponseVO500();
                break;
            case 503:
                $shipReply = new ComplexType\ShipErrorResponseVO503();
                break;
            default:
                $shipReply = new ComplexType\ShipErrorResponseVO();
                break;
        endswitch;

        $shipReply->populateFromStdClass($response);
        return $shipReply;
    }


    /**
     * @param $shipmentid
     * @param CreateTagShipmentRequest $shipRequest
     * @return ComplexType\ShipErrorResponseVO401_2|ComplexType\ShipErrorResponseVO403_2|ComplexType\ShipErrorResponseVO404_2|ComplexType\ShipErrorResponseVO500_2|ComplexType\ShipErrorResponseVO503_2|ComplexType\ShipErrorResponseVO_2|ComplexType\ShipSHPCResponseVO|mixed|\Psr\Http\Message\ResponseInterface|string|null
     * @throws MissingAccessTokenException
     *
     */
    public function cancelTagShipment( $shipmentid, $shipRequest)
    {
        $this->api_endpoint .= '/tag/cancel/'.$shipmentid;

        $this->setData($shipRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $shipReply = new ComplexType\ShipSHPCResponseVO();
                break;
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
        return $shipReply;
    }

}
