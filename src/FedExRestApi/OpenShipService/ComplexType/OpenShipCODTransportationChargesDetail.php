<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify C.O.D. transportation charges.
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
class OpenShipCODTransportationChargesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCODTransportationChargesDetail';

    /**
     * Specify the Rate Type used.
     *
     * simpleClass: OpenShipRateType
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
     * Specify which level the rate to be applied.
     *
     * simpleClass: OpenShipRateLevelType
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
     * Specify which level the charges to be applied.
     *
     * simpleClass: OpenShipChargeLevelType
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
     * Specify Charge type.
     *
     * simpleClass: OpenShipChargeType
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
