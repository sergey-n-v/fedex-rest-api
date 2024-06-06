<?php


namespace FedExRestApi\OpenShipService;


use FedExRestApi\AbstractRequest;
use FedExRestApi\Exceptions\MissingAccessTokenException;
use FedExRestApi\OpenShipService\ComplexType\ConfirmOpenShipmentRequest;
use FedExRestApi\OpenShipService\ComplexType\CreateOpenShipmentRequest;
use FedExRestApi\OpenShipService\ComplexType\DeleteOpenShipmentPackagesRequest;
use FedExRestApi\OpenShipService\ComplexType\DeleteOpenShipmentRequest;
use FedExRestApi\OpenShipService\ComplexType\ModifyOpenShipmentPackagesRequest;
use FedExRestApi\OpenShipService\ComplexType\ModifyOpenShipmentRequest;
use FedExRestApi\OpenShipService\ComplexType\RetrieveOpenShipmentPackagesRequest;
use FedExRestApi\OpenShipService\ComplexType\RetrieveOpenShipmentRequest;
use FedExRestApi\Utility\RequestMethod;
use Psr\Http\Message\ResponseInterface;

class Request extends AbstractRequest
{

    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/ship/v1/openshipments';
    }

    /**
     * Create Open Shipment
     *
     * his endpoint helps you to create an opennnn shipment request withh the required shipping information.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param CreateOpenShipmentRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function createOpenShipment( $trackRequest)
    {
        $this->api_endpoint .= '/create';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_CreateOpenShipment();
                break;
//            case 404:
//                $trackReply = new ComplexType\EtdErrorResponseVO404();
//                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Modify Open Shipment
     *
     * This endpoint helps you to modify an Open shipment request with the required shipping information before the shipment is confirmed.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param ModifyOpenShipmentRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function modifyOpenShipment( $trackRequest)
    {
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_ModifyOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Confirm Open Shipment
     *
     * Use this endpoint to validate and upload the Open Ship shipment data to
     * FedEx Systems once all packages are added in the Shipment request.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param ConfirmOpenShipmentRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function confirmOpenShipment( $trackRequest)
    {
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_ConfirmOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Modify Open Shipment Packages
     *
     * This endpoint helps you to modify packages in Open Shipment request with the required shipping
     *  information before the shipment is confirmed.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param ModifyOpenShipmentPackagesRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|ComplexType\OpenShipSHPCResponseVO_ModifyPackageInOpenShipment|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function modifyOpenShipmentPackages( $trackRequest)
    {
        $this->api_endpoint .= '/packages';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_ModifyPackageInOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Delete Open Shipment Packages
     *
     * This endpoint helps you to delete packages from Open Shipment request with the required shipping information before the shipment is confirmed.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param DeleteOpenShipmentPackagesRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|ComplexType\OpenShipSHPCResponseVO_DeletePackages|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function deleteOpenShipmentPackages( $trackRequest)
    {
        $this->api_endpoint .= '/packages/delete';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_DeletePackages();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Retrieve Open Shipment Package
     *
     * This endpoint helps the user to RETRIEVE specific package request details of the Open Shipment that is created.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param RetrieveOpenShipmentPackagesRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|ComplexType\OpenShipSHPCResponseVO_RetrievePackageInOpenShipment|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function retrieveOpenShipmentPackages( $trackRequest)
    {
        $this->api_endpoint .= '/packages/retrieve';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_RetrievePackageInOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * OpenShipmentDelete V1
     *
     * This endpoint helps you to delete a Openshipment request with the required shipping information before the shipment is confirmed.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param DeleteOpenShipmentRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function deleteOpenShipment( $trackRequest)
    {
        $this->api_endpoint .= '/delete';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_PUT;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_DeleteOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Retrieve Open Shipment
     *
     * This endpoint helps the user to RETRIEVE the entire shipment request details of the OpenShipment that is created.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param RetrieveOpenShipmentRequest $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|ComplexType\OpenShipSHPCResponseVO_RetrieveOpenShipment|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function retrieveOpenShipment( $trackRequest)
    {
        $this->api_endpoint .= '/retrieve';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_RetrieveOpenShipment();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Get Open Shipment Results
     *
     * This endpoint enables you to finalize the Open Shipment. Once an Open Shipment is confirmed, no further changes can be done.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param $trackRequest
     * @return ComplexType\OpenShipErrorResponseVO401_2|ComplexType\OpenShipErrorResponseVO404_2|ComplexType\OpenShipErrorResponseVO500_2|ComplexType\OpenShipErrorResponseVO503_2|ComplexType\OpenShipErrorResponseVO_2|mixed|ResponseInterface|null
     * @throws MissingAccessTokenException
     */
    public function resultsOpenShipment( $trackRequest)
    {
        $this->api_endpoint .= '/results';
        $this->setData($trackRequest->toArray());
        $this->requestMethod = RequestMethod::METHOD_POST;
        $response = $this->request();

        if ($this->raw) {
            return $response;
        }

        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\OpenShipSHPCResponseVO_GetOpenShipmentResults();
                break;
            case 401:
                $trackReply = new ComplexType\OpenShipErrorResponseVO401_2();
                break;
            case 403:
                $trackReply = new ComplexType\OpenShipErrorResponseVO403_2();
                break;
            case 404:
                $trackReply = new ComplexType\OpenShipErrorResponseVO404_2();
                break;
            case 500:
                $trackReply = new ComplexType\OpenShipErrorResponseVO500_2();
                break;
            case 503:
                $trackReply = new ComplexType\OpenShipErrorResponseVO503_2();
                break;
            default:
                $trackReply = new ComplexType\OpenShipErrorResponseVO_2();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


}
