<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the Hazardous commodity quantity details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $quantityType
 * @property float $amount
 * @property string $units

 */
class OpenShipHazardousCommodityQuantityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHazardousCommodityQuantityDetail';

    /**
     * Indicate the measure of units quantity to be validated.
     *
     * simpleClass: OpenShipQuantityType
     * Example: GROSS
     * @param string $quantityType
     * @return $this
     */
    public function setQuantityType($quantityType)
    {
        $this->values['quantityType'] = $quantityType;
        return $this;
    }

    /**
     * Get quantityType
     *
     * @return string
     */
    public function getQuantityType()
    {
        return $this->values['quantityType'];
    }

    /**
     * Indicate the amount of the commodity in alternate units.<br>Example: 24.56
     *
     *
     * Example: 24.56
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['amount'] = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * Indicate the unit of measure.<br>Example: KG
     *
     *
     * Example: Kg
     * @param string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['units'] = $units;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->values['units'];
    }
}
