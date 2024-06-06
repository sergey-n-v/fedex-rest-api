<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is used specify the line item level liability coverage.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $coverageType
 * @property AvCoverageAmount $coverageAmount

 */
class AvLiabilityCoverageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvLiabilityCoverageDetail';

    /**
     * Optional
 This is the liability coverage type.
     *
     * simpleClass: AvCoverageType
     * Example: 
     * @param string $coverageType
     * @return $this
     */
    public function setCoverageType($coverageType)
    {
        $this->values['coverageType'] = $coverageType;
        return $this;
    }

    /**
     * Get coverageType
     *
     * @return string
     */
    public function getCoverageType()
    {
        return $this->values['coverageType'];
    }

    /**
     * Set coverageAmount
     *
     * 
     * Example: 
     * @param AvMoney $coverageAmount
     * @return $this
     */
    public function setCoverageAmount($coverageAmount)
    {
        $this->values['coverageAmount'] = $coverageAmount;
        return $this;
    }

    /**
     * Get coverageAmount
     *
     * @return AvMoney
     */
    public function getCoverageAmount()
    {
        return $this->values['coverageAmount'];
    }
}
