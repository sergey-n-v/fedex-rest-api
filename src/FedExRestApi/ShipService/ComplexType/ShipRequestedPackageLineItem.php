<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $sequenceNumber
 * @property string $subPackagingType
 * @property ShipCustomerReference_1[] $customerReferences
 * @property ShipMoney $declaredValue
 * @property ShipWeight $weight
 * @property ShipDimensions $dimensions
 * @property int $groupPackageCount
 * @property string $itemDescriptionForClearance
 * @property ShipContentRecord[] $contentRecord
 * @property string $itemDescription
 * @property ShipVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property ShipPackageSpecialServicesRequested $packageSpecialServices

 */
class ShipRequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRequestedPackageLineItem';

    /**
     * Set sequenceNumber
     *
     *
     * Example: 1
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
     * Set subPackagingType
     *
     *
     * Example: BUCKET
     * @param string $subPackagingType
     * @return $this
     */
    public function setSubPackagingType($subPackagingType)
    {
        $this->values['subPackagingType'] = $subPackagingType;
        return $this;
    }

    /**
     * Get subPackagingType
     *
     * @return string
     */
    public function getSubPackagingType()
    {
        return $this->values['subPackagingType'];
    }

    /**
     * Set customerReferences
     *
     *
     * Example:
     * @param ShipCustomerReference_1[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['customerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Get customerReferences
     *
     * @return ShipCustomerReference_1[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }

    /**
     * Set declaredValue
     *
     *
     * Example:
     * @param ShipMoney $declaredValue
     * @return $this
     */
    public function setDeclaredValue(ShipMoney $declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return ShipMoney
     */
    public function getDeclaredValue()
    {
        return $this->values['declaredValue'];
    }

    /**
     * Set weight
     *
     *
     * Example:
     * @param ShipWeight $weight
     * @return $this
     */
    public function setWeight(ShipWeight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return ShipWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set dimensions
     *
     *
     * Example:
     * @param ShipDimensions $dimensions
     * @return $this
     */
    public function setDimensions(ShipDimensions $dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return ShipDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }

    /**
     * Set groupPackageCount
     *
     *
     * Example: 2
     * @param int $groupPackageCount
     * @return $this
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->values['groupPackageCount'] = $groupPackageCount;
        return $this;
    }

    /**
     * Get groupPackageCount
     *
     * @return int
     */
    public function getGroupPackageCount()
    {
        return $this->values['groupPackageCount'];
    }

    /**
     * Set itemDescriptionForClearance
     *
     *
     * Example: description
     * @param string $itemDescriptionForClearance
     * @return $this
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance)
    {
        $this->values['itemDescriptionForClearance'] = $itemDescriptionForClearance;
        return $this;
    }

    /**
     * Get itemDescriptionForClearance
     *
     * @return string
     */
    public function getItemDescriptionForClearance()
    {
        return $this->values['itemDescriptionForClearance'];
    }

    /**
     * Set contentRecord
     *
     *
     * Example:
     * @param ShipContentRecord[] $contentRecord
     * @return $this
     */
    public function setContentRecord(array $contentRecord)
    {
        $this->values['contentRecord'] = $contentRecord;
        return $this;
    }

    /**
     * Get contentRecord
     *
     * @return ShipContentRecord[]
     */
    public function getContentRecord()
    {
        return $this->values['contentRecord'];
    }

    /**
     * Set itemDescription
     *
     *
     * Example: item description for the package
     * @param string $itemDescription
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->values['itemDescription'] = $itemDescription;
        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->values['itemDescription'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param ShipVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(ShipVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return ShipVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->values['variableHandlingChargeDetail'];
    }

    /**
     * Set packageSpecialServices
     *
     *
     * Example:
     * @param ShipPackageSpecialServicesRequested $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(ShipPackageSpecialServicesRequested $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return ShipPackageSpecialServicesRequested
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
