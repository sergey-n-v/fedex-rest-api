<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies shipping transaction output details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property string $shipDatestamp
 * @property string $serviceCategory
 * @property OpenShipLabelResponseVO[] $shipmentDocuments
 * @property OpenShipPieceResponse[] $pieceResponses
 * @property string $serviceName
 * @property OpenShipAlert[] $alerts
 * @property OpenShipCompletedShipmentDetail $completedShipmentDetail
 * @property OpenShipShipmentAdvisoryDetails $shipmentAdvisoryDetails
 * @property string $masterTrackingNumber

 */
class OpenShipTransactionShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipTransactionShipmentOutputVO';

    /**
     * Indicate the FedEx serviceType used for this shipment. The results will be filtered by the serviceType value indicated.<br>Example: STANDARD_OVERNIGHT<br><a onclick='loadDocReference("servicetypes")'>click here to see Service Types</a>
     *
     * 
     * Example: STANDARD_OVERNIGHT
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * This is the shipment date. Default value is current date in case the date is not provided or a past date is provided.<br>Format [YYYY-MM-DD].<br>Example: 2019-10-14
     *
     * 
     * Example: 2010-03-04
     * @param string $shipDatestamp
     * @return $this
     */
    public function setShipDatestamp($shipDatestamp)
    {
        $this->values['shipDatestamp'] = $shipDatestamp;
        return $this;
    }

    /**
     * Get shipDatestamp
     *
     * @return string
     */
    public function getShipDatestamp()
    {
        return $this->values['shipDatestamp'];
    }

    /**
     * Indicates the Service Category.<br>Example: EXPRESS
     *
     * 
     * Example: EXPRESS
     * @param string $serviceCategory
     * @return $this
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->values['serviceCategory'] = $serviceCategory;
        return $this;
    }

    /**
     * Get serviceCategory
     *
     * @return string
     */
    public function getServiceCategory()
    {
        return $this->values['serviceCategory'];
    }

    /**
     * These are shipping document details.
     *
     * 
     * Example: 
     * @param OpenShipLabelResponseVO[] $shipmentDocuments
     * @return $this
     */
    public function setShipmentDocuments(array $shipmentDocuments)
    {
        $this->values['shipmentDocuments'] = $shipmentDocuments;
        return $this;
    }

    /**
     * Get shipmentDocuments
     *
     * @return OpenShipLabelResponseVO[]
     */
    public function getShipmentDocuments()
    {
        return $this->values['shipmentDocuments'];
    }

    /**
     * These are pieces information received in the response.
     *
     * 
     * Example: 
     * @param OpenShipPieceResponse[] $pieceResponses
     * @return $this
     */
    public function setPieceResponses(array $pieceResponses)
    {
        $this->values['pieceResponses'] = $pieceResponses;
        return $this;
    }

    /**
     * Get pieceResponses
     *
     * @return OpenShipPieceResponse[]
     */
    public function getPieceResponses()
    {
        return $this->values['pieceResponses'];
    }

    /**
     * This is the service name associated with the shipment.<br>Example: FedEx Ground
     *
     * 
     * Example: FedEx 2 Day Freight
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->values['serviceName'] = $serviceName;
        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->values['serviceName'];
    }

    /**
     * These are alert details received in the response.
     *
     * 
     * Example: 
     * @param OpenShipAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return OpenShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * Set completedShipmentDetail
     *
     * 
     * Example: 
     * @param OpenShipCompletedShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(OpenShipCompletedShipmentDetail $completedShipmentDetail)
    {
        $this->values['completedShipmentDetail'] = $completedShipmentDetail;
        return $this;
    }

    /**
     * Get completedShipmentDetail
     *
     * @return OpenShipCompletedShipmentDetail
     */
    public function getCompletedShipmentDetail()
    {
        return $this->values['completedShipmentDetail'];
    }

    /**
     * Set shipmentAdvisoryDetails
     *
     * 
     * Example: 
     * @param OpenShipShipmentAdvisoryDetails $shipmentAdvisoryDetails
     * @return $this
     */
    public function setShipmentAdvisoryDetails(OpenShipShipmentAdvisoryDetails $shipmentAdvisoryDetails)
    {
        $this->values['shipmentAdvisoryDetails'] = $shipmentAdvisoryDetails;
        return $this;
    }

    /**
     * Get shipmentAdvisoryDetails
     *
     * @return OpenShipShipmentAdvisoryDetails
     */
    public function getShipmentAdvisoryDetails()
    {
        return $this->values['shipmentAdvisoryDetails'];
    }

    /**
     * This is a master tracking number for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provided).<br>Example: 794953535000
     *
     * 
     * Example: 794953535000
     * @param string $masterTrackingNumber
     * @return $this
     */
    public function setMasterTrackingNumber($masterTrackingNumber)
    {
        $this->values['masterTrackingNumber'] = $masterTrackingNumber;
        return $this;
    }

    /**
     * Get masterTrackingNumber
     *
     * @return string
     */
    public function getMasterTrackingNumber()
    {
        return $this->values['masterTrackingNumber'];
    }
}
