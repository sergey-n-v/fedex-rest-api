<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the Hazardous Commodity Quantity Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $quantityType
 * @property float $amount
 * @property string $units

 */
class ShipHazardousCommodityQuantityDetail002 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityQuantityDetail002';

    /**
     * Set quantityType
     *
     * simpleClass: ShipQuantityType
     * Example: NET
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
     * Set amount
     *
     * 
     * Example: 34.56
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
     * Set units
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
