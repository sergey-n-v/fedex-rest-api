<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Returns the result of processing the desired package as a single-package shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCompletedPackageDetail[] $completedPackageDetails
 * @property OpenShipShipmentOperationalDetail $operationalDetail
 * @property string $carrierCode
 * @property OpenShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail
 * @property OpenShipCompletedEtdDetail $completedEtdDetail
 * @property string $packagingDescription
 * @property OpenShipTrackingId $masterTrackingId
 * @property OpenShipServiceDescription $serviceDescription
 * @property boolean $usDomestic
 * @property OpenShipCompletedHazardousShipmentDetail $hazardousShipmentDetail
 * @property OpenShipShipmentRating $shipmentRating
 * @property OpenShipDocumentRequirementsDetail $documentRequirements
 * @property string $exportComplianceStatement
 * @property OpenShipPendingShipmentAccessDetail $accessDetail

 */
class OpenShipCompletedShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedShipmentDetail';

    /**
     * Indicates the completed package details.
     *
     * 
     * Example: 
     * @param OpenShipCompletedPackageDetail[] $completedPackageDetails
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
     * @return OpenShipCompletedPackageDetail[]
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
     * @param OpenShipShipmentOperationalDetail $operationalDetail
     * @return $this
     */
    public function setOperationalDetail(OpenShipShipmentOperationalDetail $operationalDetail)
    {
        $this->values['operationalDetail'] = $operationalDetail;
        return $this;
    }

    /**
     * Get operationalDetail
     *
     * @return OpenShipShipmentOperationalDetail
     */
    public function getOperationalDetail()
    {
        return $this->values['operationalDetail'];
    }

    /**
     * Specifies which carrier should be included.<br>Example: FDXE
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
     * @param OpenShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail
     * @return $this
     */
    public function setCompletedHoldAtLocationDetail(OpenShipCompletedHoldAtLocationDetail $completedHoldAtLocationDetail)
    {
        $this->values['completedHoldAtLocationDetail'] = $completedHoldAtLocationDetail;
        return $this;
    }

    /**
     * Get completedHoldAtLocationDetail
     *
     * @return OpenShipCompletedHoldAtLocationDetail
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
     * @param OpenShipCompletedEtdDetail $completedEtdDetail
     * @return $this
     */
    public function setCompletedEtdDetail(OpenShipCompletedEtdDetail $completedEtdDetail)
    {
        $this->values['completedEtdDetail'] = $completedEtdDetail;
        return $this;
    }

    /**
     * Get completedEtdDetail
     *
     * @return OpenShipCompletedEtdDetail
     */
    public function getCompletedEtdDetail()
    {
        return $this->values['completedEtdDetail'];
    }

    /**
     * Specifies packaging description.
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
     * @param OpenShipTrackingId $masterTrackingId
     * @return $this
     */
    public function setMasterTrackingId(OpenShipTrackingId $masterTrackingId)
    {
        $this->values['masterTrackingId'] = $masterTrackingId;
        return $this;
    }

    /**
     * Get masterTrackingId
     *
     * @return OpenShipTrackingId
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
     * @param OpenShipServiceDescription $serviceDescription
     * @return $this
     */
    public function setServiceDescription(OpenShipServiceDescription $serviceDescription)
    {
        $this->values['serviceDescription'] = $serviceDescription;
        return $this;
    }

    /**
     * Get serviceDescription
     *
     * @return OpenShipServiceDescription
     */
    public function getServiceDescription()
    {
        return $this->values['serviceDescription'];
    }

    /**
     * Indicates whether or not this is an intra-U.S. shipment.
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
     * @param OpenShipCompletedHazardousShipmentDetail $hazardousShipmentDetail
     * @return $this
     */
    public function setHazardousShipmentDetail(OpenShipCompletedHazardousShipmentDetail $hazardousShipmentDetail)
    {
        $this->values['hazardousShipmentDetail'] = $hazardousShipmentDetail;
        return $this;
    }

    /**
     * Get hazardousShipmentDetail
     *
     * @return OpenShipCompletedHazardousShipmentDetail
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
     * @param OpenShipShipmentRating $shipmentRating
     * @return $this
     */
    public function setShipmentRating(OpenShipShipmentRating $shipmentRating)
    {
        $this->values['shipmentRating'] = $shipmentRating;
        return $this;
    }

    /**
     * Get shipmentRating
     *
     * @return OpenShipShipmentRating
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
     * @param OpenShipDocumentRequirementsDetail $documentRequirements
     * @return $this
     */
    public function setDocumentRequirements(OpenShipDocumentRequirementsDetail $documentRequirements)
    {
        $this->values['documentRequirements'] = $documentRequirements;
        return $this;
    }

    /**
     * Get documentRequirements
     *
     * @return OpenShipDocumentRequirementsDetail
     */
    public function getDocumentRequirements()
    {
        return $this->values['documentRequirements'];
    }

    /**
     * For US export shipments requiring an EEI, enter the ITN number received from AES when you filed your shipment or the FTR (Foreign Trade Regulations) exemption number.The proper format for an ITN number is AES XYYYYMMDDNNNNNN where YYYYMMDD is date and NNNNNN are numbers generated by the AES.<br> Example: AESX20220714987654<br>Note: The ITN or FTR exemption number you submit in the ship request prints on the international shipping label.<br><br>For CA export shipments,it can be Proof of report number(15-32 alphanumeric) ,Summary proof of report number(7-32 alphanumeric) or Exemption number(2 digit) based on the selected b13AFilingOption.<br>Example: 98765432107654321(POR number), 7654321(Summary POR number) and 02(Exemption number).<br>For FTR exemption number you need provide a predefined value as NO_EEI_30_37_A.
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
     * @param OpenShipPendingShipmentAccessDetail $accessDetail
     * @return $this
     */
    public function setAccessDetail(OpenShipPendingShipmentAccessDetail $accessDetail)
    {
        $this->values['accessDetail'] = $accessDetail;
        return $this;
    }

    /**
     * Get accessDetail
     *
     * @return OpenShipPendingShipmentAccessDetail
     */
    public function getAccessDetail()
    {
        return $this->values['accessDetail'];
    }
}
