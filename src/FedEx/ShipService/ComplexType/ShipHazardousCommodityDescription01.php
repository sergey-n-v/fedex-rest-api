<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Required<br>Details of hazardous commodity description.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $sequenceNumber
 * @property string $processingOptions
 * @property string $subsidiaryClasses
 * @property string $labelText
 * @property string $technicalName
 * @property ShipHazardousCommodityPackingDetail01 $packingDetails
 * @property string $authorization
 * @property boolean $reportableQuantity
 * @property float $percentage
 * @property string $id
 * @property string $packingGroup
 * @property string $properShippingName
 * @property string $hazardClass

 */
class ShipHazardousCommodityDescription01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityDescription01';

    /**
     * Set sequenceNumber
     *
     * 
     * Example: 9812
     * @param int $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['sequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Get sequenceNumber
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->values['sequenceNumber'];
    }

    /**
     * Set processingOptions
     *
     * simpleClass: ShipProcessingOptions
     * Example: 
     * @param string $processingOptions
     * @return $this
     */
    public function setProcessingOptions(array $processingOptions)
    {
        $this->values['processingOptions'] = $processingOptions;
        return $this;
    }

    /**
     * Get processingOptions
     *
     * @return string
     */
    public function getProcessingOptions()
    {
        return $this->values['processingOptions'];
    }

    /**
     * Set subsidiaryClasses
     *
     * 
     * Example: ["Subsidiary Classes"]
     * @param string $subsidiaryClasses
     * @return $this
     */
    public function setSubsidiaryClasses(array $subsidiaryClasses)
    {
        $this->values['subsidiaryClasses'] = $subsidiaryClasses;
        return $this;
    }

    /**
     * Get subsidiaryClasses
     *
     * @return string
     */
    public function getSubsidiaryClasses()
    {
        return $this->values['subsidiaryClasses'];
    }

    /**
     * Set labelText
     *
     * 
     * Example: labelText
     * @param string $labelText
     * @return $this
     */
    public function setLabelText($labelText)
    {
        $this->values['labelText'] = $labelText;
        return $this;
    }

    /**
     * Get labelText
     *
     * @return string
     */
    public function getLabelText()
    {
        return $this->values['labelText'];
    }

    /**
     * Set technicalName
     *
     * 
     * Example: technicalName
     * @param string $technicalName
     * @return $this
     */
    public function setTechnicalName($technicalName)
    {
        $this->values['technicalName'] = $technicalName;
        return $this;
    }

    /**
     * Get technicalName
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->values['technicalName'];
    }

    /**
     * Set packingDetails
     *
     * 
     * Example: 
     * @param ShipHazardousCommodityPackingDetail01 $packingDetails
     * @return $this
     */
    public function setPackingDetails(ShipHazardousCommodityPackingDetail01 $packingDetails)
    {
        $this->values['packingDetails'] = $packingDetails;
        return $this;
    }

    /**
     * Get packingDetails
     *
     * @return ShipHazardousCommodityPackingDetail01
     */
    public function getPackingDetails()
    {
        return $this->values['packingDetails'];
    }

    /**
     * Set authorization
     *
     * 
     * Example: authorization
     * @param string $authorization
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->values['authorization'] = $authorization;
        return $this;
    }

    /**
     * Get authorization
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->values['authorization'];
    }

    /**
     * Set reportableQuantity
     *
     * 
     * Example: 1
     * @param boolean $reportableQuantity
     * @return $this
     */
    public function setReportableQuantity($reportableQuantity)
    {
        $this->values['reportableQuantity'] = $reportableQuantity;
        return $this;
    }

    /**
     * Get reportableQuantity
     *
     * @return boolean
     */
    public function getReportableQuantity()
    {
        return $this->values['reportableQuantity'];
    }

    /**
     * Set percentage
     *
     * 
     * Example: 12.45
     * @param float $percentage
     * @return $this
     */
    public function setPercentage($percentage)
    {
        $this->values['percentage'] = $percentage;
        return $this;
    }

    /**
     * Get percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->values['percentage'];
    }

    /**
     * Set id
     *
     * 
     * Example: 123
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['id'] = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->values['id'];
    }

    /**
     * Set packingGroup
     *
     * simpleClass: ShipPackingGroup
     * Example: I
     * @param string $packingGroup
     * @return $this
     */
    public function setPackingGroup($packingGroup)
    {
        $this->values['packingGroup'] = $packingGroup;
        return $this;
    }

    /**
     * Get packingGroup
     *
     * @return string
     */
    public function getPackingGroup()
    {
        return $this->values['packingGroup'];
    }

    /**
     * Set properShippingName
     *
     * 
     * Example: properShippingName
     * @param string $properShippingName
     * @return $this
     */
    public function setProperShippingName($properShippingName)
    {
        $this->values['properShippingName'] = $properShippingName;
        return $this;
    }

    /**
     * Get properShippingName
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->values['properShippingName'];
    }

    /**
     * Set hazardClass
     *
     * 
     * Example: hazard Class
     * @param string $hazardClass
     * @return $this
     */
    public function setHazardClass($hazardClass)
    {
        $this->values['hazardClass'] = $hazardClass;
        return $this;
    }

    /**
     * Get hazardClass
     *
     * @return string
     */
    public function getHazardClass()
    {
        return $this->values['hazardClass'];
    }
}
