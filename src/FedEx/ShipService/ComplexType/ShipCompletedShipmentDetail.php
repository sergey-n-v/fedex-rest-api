<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Returns the result of processing the desired package as a single-package shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipCompletedPackageDetail[] $completedPackageDetails
 * @property ShipShipmentOperationalDetail $operationalDetail
 * @property string $carrierCode
 * @property ShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail
 * @property ShipCompletedEtdDetail $completedEtdDetail
 * @property string $packagingDescription
 * @property ShipTrackingId $masterTrackingId
 * @property ShipServiceDescription $serviceDescription
 * @property boolean $usDomestic
 * @property ShipCompletedHazardousShipmentDetail $hazardousShipmentDetail
 * @property ShipShipmentRating $shipmentRating
 * @property ShipDocumentRequirementsDetail $documentRequirements
 * @property string $exportComplianceStatement
 * @property ShipPendingShipmentAccessDetail $accessDetail

 */
class ShipCompletedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedShipmentDetail';

    /**
     * Set completedPackageDetails
     *
     * 
     * Example: 
     * @param ShipCompletedPackageDetail[] $completedPackageDetails
     * @return $this
     */
    public function setCompletedPackageDetails(array $completedPackageDetails)
    {
        $this->values['completedPackageDetails'] = $completedPackageDetails;
        return $this;
    }

    /**
     * Get completedPackageDetails
     *
     * @return ShipCompletedPackageDetail[]
     */
    public function getCompletedPackageDetails()
    {
        return $this->values['completedPackageDetails'];
    }

    /**
     * Set operationalDetail
     *
     * 
     * Example: 
     * @param ShipShipmentOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(ShipShipmentOperationalDetail $operationalDetail)
    {
        $this->values['operationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Get operationalDetail
     *
     * @return ShipShipmentOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->values['operationalDetail'];
    }

    /**
     * Set carrierCode
     *
     * 
     * Example: FDXE
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Set completedHoldAtLocationDetail
     *
     * 
     * Example: 
     * @param ShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @return $this
     */
    public function setCompletedHoldAtLocationDetail(ShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->values['completedHoldAtLocationDetail'] = $completedHoldAtLocationDetail;
        return $this;
    }

    /**
     * Get completedHoldAtLocationDetail
     *
     * @return ShipCompletedHoldAtLocationDetail
     */
    public function getCompletedHoldAtLocationDetail()
    {
        return $this->values['completedHoldAtLocationDetail'];
    }

    /**
     * Set completedEtdDetail
     *
     * 
     * Example: 
     * @param ShipCompletedEtdDetail $completedEtdDetail
     * @return $this
     */
    public function setCompletedEtdDetail(ShipCompletedEtdDetail $completedEtdDetail)
    {
        $this->values['completedEtdDetail'] = $completedEtdDetail;
        return $this;
    }

    /**
     * Get completedEtdDetail
     *
     * @return ShipCompletedEtdDetail
     */
    public function getCompletedEtdDetail()
    {
        return $this->values['completedEtdDetail'];
    }

    /**
     * Set packagingDescription
     *
     * 
     * Example: description
     * @param string $packagingDescription
     * @return $this
     */
    public function setPackagingDescription($packagingDescription)
    {
        $this->values['packagingDescription'] = $packagingDescription;
        return $this;
    }

    /**
     * Get packagingDescription
     *
     * @return string
     */
    public function getPackagingDescription()
    {
        return $this->values['packagingDescription'];
    }

    /**
     * Set masterTrackingId
     *
     * 
     * Example: 
     * @param ShipTrackingId $masterTrackingId
     * @return $this
     */
    public function setMasterTrackingId(ShipTrackingId $masterTrackingId)
    {
        $this->values['masterTrackingId'] = $masterTrackingId;
        return $this;
    }

    /**
     * Get masterTrackingId
     *
     * @return ShipTrackingId
     */
    public function getMasterTrackingId()
    {
        return $this->values['masterTrackingId'];
    }

    /**
     * Set serviceDescription
     *
     * 
     * Example: 
     * @param ShipServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(ShipServiceDescription $serviceDescription)
    {
        $this->values['serviceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return ShipServiceDescription
     */
    public function getServiceDescription()
    {
        return $this->values['serviceDescription'];
    }

    /**
     * Set usDomestic
     *
     * 
     * Example: 1
     * @param boolean $usDomestic
     * @return $this
     */
    public function setUsDomestic($usDomestic)
    {
        $this->values['usDomestic'] = $usDomestic;
        return $this;
    }

    /**
     * Get usDomestic
     *
     * @return boolean
     */
    public function getUsDomestic()
    {
        return $this->values['usDomestic'];
    }

    /**
     * Set hazardousShipmentDetail
     *
     * 
     * Example: 
     * @param ShipCompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @return $this
     */
    public function setHazardousShipmentDetail(ShipCompletedHazardousShipmentDetail $hazardousShipmentDetail)
    {
        $this->values['hazardousShipmentDetail'] = $hazardousShipmentDetail;
        return $this;
    }

    /**
     * Get hazardousShipmentDetail
     *
     * @return ShipCompletedHazardousShipmentDetail
     */
    public function getHazardousShipmentDetail()
    {
        return $this->values['hazardousShipmentDetail'];
    }

    /**
     * Set shipmentRating
     *
     * 
     * Example: 
     * @param ShipShipmentRating $shipmentRating
     * @return $this
     */
    public function setShipmentRating(ShipShipmentRating $shipmentRating)
    {
        $this->values['shipmentRating'] = $shipmentRating;
        return $this;
    }

    /**
     * Get shipmentRating
     *
     * @return ShipShipmentRating
     */
    public function getShipmentRating()
    {
        return $this->values['shipmentRating'];
    }

    /**
     * Set documentRequirements
     *
     * 
     * Example: 
     * @param ShipDocumentRequirementsDetail $documentRequirements
     * @return $this
     */
    public function setDocumentRequirements(ShipDocumentRequirementsDetail $documentRequirements)
    {
        $this->values['documentRequirements'] = $documentRequirements;
        return $this;
    }

    /**
     * Get documentRequirements
     *
     * @return ShipDocumentRequirementsDetail
     */
    public function getDocumentRequirements()
    {
        return $this->values['documentRequirements'];
    }

    /**
     * Set exportComplianceStatement
     *
     * 
     * Example: 12345678901234567
     * @param string $exportComplianceStatement
     * @return $this
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->values['exportComplianceStatement'] = $exportComplianceStatement;
        return $this;
    }

    /**
     * Get exportComplianceStatement
     *
     * @return string
     */
    public function getExportComplianceStatement()
    {
        return $this->values['exportComplianceStatement'];
    }

    /**
     * Set accessDetail
     *
     * 
     * Example: 
     * @param ShipPendingShipmentAccessDetail $accessDetail
     * @return $this
     */
    public function setAccessDetail(ShipPendingShipmentAccessDetail $accessDetail)
    {
        $this->values['accessDetail'] = $accessDetail;
        return $this;
    }

    /**
     * Get accessDetail
     *
     * @return ShipPendingShipmentAccessDetail
     */
    public function getAccessDetail()
    {
        return $this->values['accessDetail'];
    }
}
