<?php


namespace FedExRestApi\TrackService;


use FedExRestApi\AbstractRequest;
use FedExRestApi\Exceptions\MissingAccessTokenException;
use FedExRestApi\TrackService\ComplexType\AssociatedShipmentsRequest;
use FedExRestApi\TrackService\ComplexType\NotificationsRequest;
use FedExRestApi\TrackService\ComplexType\ReferenceNumbersRequest;
use FedExRestApi\TrackService\ComplexType\TcnRequest;
use FedExRestApi\TrackService\ComplexType\TrackingDocumentsRequest;
use FedExRestApi\TrackService\ComplexType\TrackingNumbersRequest;
use FedExRestApi\TrackService\ComplexType\TrackTrkcResponseVO_SPOD;
use Psr\Http\Message\ResponseInterface;

class Request  extends AbstractRequest
{

    /**
     * {@inheritDoc}
     */
    public function setApiEndpoint()
    {
        return '/track/v1';
    }


    /**
     * Track Multiple Piece Shipment
     * This endpoint returns tracking information for multiplee piece shipments,
     * Group MPS, or an outbounddd shipment which is linked to a return shipment.<br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param AssociatedShipmentsRequest $trackRequest
     * @return mixed|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function associatedShipments( $trackRequest)
    {
        $this->api_endpoint .= '/associatedshipments';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_Associated();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Send Notification
     * This endpoint helps you setup up, customize the tracking event notifications to be received for a shipment.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param NotificationsRequest $trackRequest
     * @return ComplexType\TrackTrkcResponseVO_Notifications|mixed|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function notifications( $trackRequest)
    {
        $this->api_endpoint .= '/notifications';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_Notifications();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }


    /**
     * Track by References
     * This endpoint returns tracking information based on alternate
     * references other than Tracking Number such as Customer reference numbers, etc.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param ReferenceNumbersRequest $trackRequest
     * @return mixed|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function referenceNumbers( $trackRequest)
    {
        $this->api_endpoint .= '/referencenumbers';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_ReferenceNumber();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Track by Tracking Control Number
     * Use this endpoint to return tracking information based on a Tracking Control Number.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param TcnRequest $trackRequest
     * @return ComplexType\TrackTrkcResponseVO_TCN|mixed|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function tcn( $trackRequest)
    {
        $this->api_endpoint .= '/tcn';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_TCN();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Track Document
     *
     * This endpoint helps you to request a letter that includes the recipient's signature as a proof of delivery.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     *
     * @param TrackingDocumentsRequest $trackRequest
     * @return ComplexType\TrackTrkcResponseVO_SPOD|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function trackingDocuments( $trackRequest)
    {
        $this->api_endpoint .= '/trackingdocuments';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_SPOD();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }

    /**
     * Track by Tracking Number
     *
     * This endpoint provides customers package tracking
     * information based on a tracking number for various shipping services.
     * <br>
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * @param TrackingNumbersRequest $trackRequest
     * @return ComplexType\TrackTrkcResponseVO_TrackingNumber|mixed|ResponseInterface|string|null
     * @throws MissingAccessTokenException
     */
    public function trackingNumbers( $trackRequest)
    {
        $this->api_endpoint .= '/trackingnumbers';
        $this->setData($trackRequest->toArray());

        $response = $this->request();

        if ($this->raw) {
            return $response;
        }
        switch ($this->getResponseCode()):
            case 200:
                $trackReply = new ComplexType\TrackTrkcResponseVO_TrackingNumber();
                break;
            case 401:
                $trackReply = new ComplexType\TrackErrorResponseVO401();
                break;
            case 403:
                $trackReply = new ComplexType\TrackErrorResponseVO403();
                break;
            case 404:
                $trackReply = new ComplexType\TrackErrorResponseVO404();
                break;
            case 500:
                $trackReply = new ComplexType\TrackErrorResponseVO500();
                break;
            case 503:
                $trackReply = new ComplexType\TrackErrorResponseVO503();
                break;
            default:
                $trackReply = new ComplexType\TrackErrorResponseVO();
        endswitch;

        $trackReply->populateFromStdClass($response);
        return $trackReply;
    }
}
