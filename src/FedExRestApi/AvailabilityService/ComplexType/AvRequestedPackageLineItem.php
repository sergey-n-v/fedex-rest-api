<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AvRequestedPackageLineItem
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $physicalPackaging
 * @property int $groupPackageCount
 * @property string $itemDescriptionForClearance
 * @property AvCustomerReference[] $customerReferences
 * @property AvRequestedPackageLineItemContentRecord $contentRecord
 * @property AvInsuredValue $declaredValue
 * @property AvWeight $weight
 * @property AvDimensions $dimensions
 * @property AvPackageSpecialServicesRequested $packageSpecialServices

 */
class AvRequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvRequestedPackageLineItem';

    /**
     * Specify the packaging used.<br>Example: FEDEX_PAK<br><a onclick='loadDocReference("packagetypes")'>Click here to see Package Types</a>
     *
     *
     * Example: FEDEX_ENVELOPE
     * @param string $physicalPackaging
     * @return $this
     */
    public function setPhysicalPackaging($physicalPackaging)
    {
        $this->values['physicalPackaging'] = $physicalPackaging;
        return $this;
    }

    /**
     * Get physicalPackaging
     *
     * @return string
     */
    public function getPhysicalPackaging()
    {
        return $this->values['physicalPackaging'];
    }

    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     *
     *
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
     * Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     *
     *
     * Example: Item Description for Clearence
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
     * These are additional customer reference data for commercial invoice.
     *
     *
     * Example:
     * @param AvCustomerReference[] $customerReferences
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
     * @return AvCustomerReference[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }

    /**
     * Set contentRecord
     *
     *
     * Example:
     * @param AvContentRecord $contentRecord
     * @return $this
     */
    public function setContentRecord($contentRecord)
    {
        $this->values['contentRecord'] = $contentRecord;
        return $this;
    }

    /**
     * Get contentRecord
     *
     * @return AvContentRecord
     */
    public function getContentRecord()
    {
        return $this->values['contentRecord'];
    }

    /**
     * Set declaredValue
     *
     *
     * Example:
     * @param AvMoney $declaredValue
     * @return $this
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return AvMoney
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
     * @param AvWeight1|AvWeight $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return AvWeight1|AvWeight
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
     * @param AvDimensions1|AvDimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return AvDimensions1|AvDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }

    /**
     * Set packageSpecialServices
     *
     *
     * Example:
     * @param AvPackageSpecialServicesRequested $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(AvPackageSpecialServicesRequested $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return AvPackageSpecialServicesRequested
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
