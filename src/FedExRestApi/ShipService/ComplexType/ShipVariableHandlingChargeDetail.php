<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateType
 * @property float $percentValue
 * @property string $rateLevelType
 * @property ShipMoney $fixedValue
 * @property string $rateElementBasis

 */
class ShipVariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipVariableHandlingChargeDetail';

    /**
     * Set rateType
     *
     * simpleClass: ShipRateType
     * Example: PREFERRED_CURRENCY
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
     * Example: 12.45
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
     * simpleClass: ShipRateLevelType
     * Example: INDIVIDUAL_PACKAGE_RATE
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
     * @param ShipMoney $fixedValue
     * @return $this
     */
    public function setFixedValue(ShipMoney $fixedValue)
    {
        $this->values['fixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Get fixedValue
     *
     * @return ShipMoney
     */
    public function getFixedValue()
    {
        return $this->values['fixedValue'];
    }

    /**
     * Set rateElementBasis
     *
     * simpleClass: ShipRateElementBasis
     * Example: NET_CHARGE_EXCLUDING_TAXES
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
