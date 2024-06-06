<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvTransitTimeRequestedPackageLineItem
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRequestedPackageLineItem_declaredValue $declaredValue
 * @property AvTransitTimeRequestedPackageLineItem_weight $weight
 * @property AvTransitTimeRequestedPackageLineItem_dimensions $dimensions
 * @property AvTransitTimeRequestedPackageLineItem_packageSpecialServices $packageSpecialServices

 */
class AvTransitTimeRequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem';

    /**
     * Set declaredValue
     *
     * 
     * Example: 
     * @param AvTransitTimeRequestedPackageLineItem_declaredValue $declaredValue
     * @return $this
     */
    public function setDeclaredValue(AvTransitTimeRequestedPackageLineItem_declaredValue $declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return AvTransitTimeRequestedPackageLineItem_declaredValue
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
     * @param AvTransitTimeRequestedPackageLineItem_weight $weight
     * @return $this
     */
    public function setWeight(AvTransitTimeRequestedPackageLineItem_weight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return AvTransitTimeRequestedPackageLineItem_weight
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
     * @param AvTransitTimeRequestedPackageLineItem_dimensions $dimensions
     * @return $this
     */
    public function setDimensions(AvTransitTimeRequestedPackageLineItem_dimensions $dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return AvTransitTimeRequestedPackageLineItem_dimensions
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
     * @param AvTransitTimeRequestedPackageLineItem_packageSpecialServices $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(AvTransitTimeRequestedPackageLineItem_packageSpecialServices $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return AvTransitTimeRequestedPackageLineItem_packageSpecialServices
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
