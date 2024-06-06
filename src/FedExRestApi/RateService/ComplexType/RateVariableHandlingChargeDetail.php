<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the details on how to calculate variable handling charges at the package level. If indicated, element rateLevelType is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateType
 * @property float $percentValue
 * @property string $rateLevelType
 * @property RateMoney $fixedValue
 * @property string $rateElementBasis

 */
class RateVariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateVariableHandlingChargeDetail';

    /**
     * Set rateType
     *
     * simpleClass: RateRateType
     * Example:
     * @param string $rateType
     * @return $this
     */
    public function setRateType($rateType)
    {
        $this->values['rateType'] = $rateType;
        return $this;
    }

    /**
     * Get rateType
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->values['rateType'];
    }

    /**
     * Set percentValue
     *
     *
     * Example:
     * @param float $percentValue
     * @return $this
     */
    public function setPercentValue($percentValue)
    {
        $this->values['percentValue'] = $percentValue;
        return $this;
    }

    /**
     * Get percentValue
     *
     * @return float
     */
    public function getPercentValue()
    {
        return $this->values['percentValue'];
    }

    /**
     * Set rateLevelType
     *
     * simpleClass: RateRateLevelType
     * Example:
     * @param string $rateLevelType
     * @return $this
     */
    public function setRateLevelType($rateLevelType)
    {
        $this->values['rateLevelType'] = $rateLevelType;
        return $this;
    }

    /**
     * Get rateLevelType
     *
     * @return string
     */
    public function getRateLevelType()
    {
        return $this->values['rateLevelType'];
    }

    /**
     * Set fixedValue
     *
     *
     * Example:
     * @param RateMoney $fixedValue
     * @return $this
     */
    public function setFixedValue(RateMoney $fixedValue)
    {
        $this->values['fixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Get fixedValue
     *
     * @return RateMoney
     */
    public function getFixedValue()
    {
        return $this->values['fixedValue'];
    }

    /**
     * Set rateElementBasis
     *
     * simpleClass: RateRateElementBasis
     * Example:
     * @param string $rateElementBasis
     * @return $this
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->values['rateElementBasis'] = $rateElementBasis;
        return $this;
    }

    /**
     * Get rateElementBasis
     *
     * @return string
     */
    public function getRateElementBasis()
    {
        return $this->values['rateElementBasis'];
    }
}
