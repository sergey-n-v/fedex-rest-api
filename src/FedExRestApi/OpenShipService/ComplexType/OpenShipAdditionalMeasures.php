<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipAdditionalMeasures
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $quantity
 * @property string $units

 */
class OpenShipAdditionalMeasures extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipAdditionalMeasures';

    /**
     * Specify commodity quantity.
     *
     *
     * Example: 12.45
     * @param float $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }

    /**
     * Unit of measure used to express the quantity of this commodity line item.
     *
     *
     * Example: KG
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
