<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * RateRequestedPackageLineItem
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $subPackagingType
 * @property int $groupPackageCount
 * @property RateContentRecord[] $contentRecord
 * @property RateMoney $declaredValue
 * @property RateWeight_2 $weight
 * @property RateRequestePackageLineItemDimensions $dimensions
 * @property RateVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property RatePackageSpecialServicesRequested $packageSpecialServices

 */
class RateRequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRequestedPackageLineItem';

    /**
     * Set subPackagingType
     *
     *
     * Example: BAG
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
     * Set groupPackageCount
     *
     *
     * Example: 1
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
     * Set contentRecord
     *
     *
     * Example:
     * @param RateContentRecord[] $contentRecord
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
     * @return RateContentRecord[]
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
     * @param RateMoney $declaredValue
     * @return $this
     */
    public function setDeclaredValue(RateMoney $declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return RateMoney
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
     * @param RateWeight_2 $weight
     * @return $this
     */
    public function setWeight(RateWeight_2 $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return RateWeight_2
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
     * @param RateRequestePackageLineItemDimensions $dimensions
     * @return $this
     */
    public function setDimensions(RateRequestePackageLineItemDimensions $dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return RateRequestePackageLineItemDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param RateVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(RateVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return RateVariableHandlingChargeDetail
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
     * @param RatePackageSpecialServicesRequested $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(RatePackageSpecialServicesRequested $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return RatePackageSpecialServicesRequested
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
