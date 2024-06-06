<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies Variable Handling Charge details
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $percentValue
 * @property AvFixedValue $fixedValue
 * @property string $rateElementBasis
 * @property string $rateTypeBasis

 */
class AvVariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvVariableHandlingChargeDetail';

    /**
     * variable handling percentage <br> Example: 25.67
     *
     *
     * Example: 25.67
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
     * Set fixedValue
     *
     *
     * Example:
     * @param AvMoney $fixedValue
     * @return $this
     */
    public function setFixedValue($fixedValue)
    {
        $this->values['fixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Get fixedValue
     *
     * @return AvMoney
     */
    public function getFixedValue()
    {
        return $this->values['fixedValue'];
    }

    /**
     * Description of the percentage <br> Example: NET_CHARGE
     *
     * simpleClass: AvRateElementBasis
     * Example: NET_CHARGE
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

    /**
     * Optional <br> RateType Basis <br> Example: ACCOUNT
     *
     * simpleClass: AvRateTypeBasis
     * Example: ACCOUNT
     * @param string $rateTypeBasis
     * @return $this
     */
    public function setRateTypeBasis($rateTypeBasis)
    {
        $this->values['rateTypeBasis'] = $rateTypeBasis;
        return $this;
    }

    /**
     * Get rateTypeBasis
     *
     * @return string
     */
    public function getRateTypeBasis()
    {
        return $this->values['rateTypeBasis'];
    }
}
