<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are COD Transportation Charges Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateType
 * @property string $rateLevelType
 * @property string $chargeLevelType
 * @property string $chargeType

 */
class RateCODTransportationChargesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCODTransportationChargesDetail';

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
     * Set chargeLevelType
     *
     * simpleClass: RateChargeLevelType
     * Example:
     * @param string $chargeLevelType
     * @return $this
     */
    public function setChargeLevelType($chargeLevelType)
    {
        $this->values['chargeLevelType'] = $chargeLevelType;
        return $this;
    }

    /**
     * Get chargeLevelType
     *
     * @return string
     */
    public function getChargeLevelType()
    {
        return $this->values['chargeLevelType'];
    }

    /**
     * Set chargeType
     *
     * simpleClass: RateChargeType
     * Example:
     * @param string $chargeType
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->values['chargeType'] = $chargeType;
        return $this;
    }

    /**
     * Get chargeType
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->values['chargeType'];
    }
}
