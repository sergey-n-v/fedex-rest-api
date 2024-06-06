<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
 * @property ShipLabelResponseVO[] $shipmentDocuments
 * @property ShipPieceResponse[] $pieceResponses
 * @property string $serviceName
 * @property ShipAlert[] $alerts
 * @property ShipCompletedShipmentDetail $completedShipmentDetail
 * @property ShipShipmentAdvisoryDetails $shipmentAdvisoryDetails
 * @property string $masterTrackingNumber

 */
class ShipTransactionShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipTransactionShipmentOutputVO';

    /**
     * Set serviceType
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
     * Set shipDatestamp
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
     * Set serviceCategory
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
     * Set shipmentDocuments
     *
     *
     * Example:
     * @param ShipLabelResponseVO[] $shipmentDocuments
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
     * @return ShipLabelResponseVO[]
     */
    public function getShipmentDocuments()
    {
        return $this->values['shipmentDocuments'];
    }

    /**
     * Set pieceResponses
     *
     *
     * Example:
     * @param ShipPieceResponse[] $pieceResponses
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
     * @return ShipPieceResponse[]
     */
    public function getPieceResponses()
    {
        return $this->values['pieceResponses'];
    }

    /**
     * Set serviceName
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
     * Set alerts
     *
     *
     * Example:
     * @param ShipAlert[] $alerts
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
     * @return ShipAlert[]
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
     * @param ShipCompletedShipmentDetail $completedShipmentDetail
     * @return $this
     */
    public function setCompletedShipmentDetail(ShipCompletedShipmentDetail $completedShipmentDetail)
    {
        $this->values['completedShipmentDetail'] = $completedShipmentDetail;
        return $this;
    }

    /**
     * Get completedShipmentDetail
     *
     * @return ShipCompletedShipmentDetail
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
     * @param ShipShipmentAdvisoryDetails $shipmentAdvisoryDetails
     * @return $this
     */
    public function setShipmentAdvisoryDetails(ShipShipmentAdvisoryDetails $shipmentAdvisoryDetails)
    {
        $this->values['shipmentAdvisoryDetails'] = $shipmentAdvisoryDetails;
        return $this;
    }

    /**
     * Get shipmentAdvisoryDetails
     *
     * @return ShipShipmentAdvisoryDetails
     */
    public function getShipmentAdvisoryDetails()
    {
        return $this->values['shipmentAdvisoryDetails'];
    }

    /**
     * Set masterTrackingNumber
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
