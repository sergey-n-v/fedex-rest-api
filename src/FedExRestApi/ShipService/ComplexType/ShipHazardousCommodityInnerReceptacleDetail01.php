<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipHazardousCommodityInnerReceptacleDetail01
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipHazardousCommodityQuantityDetail002 $quantity

 */
class ShipHazardousCommodityInnerReceptacleDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityInnerReceptacleDetail01';

    /**
     * Set quantity
     *
     *
     * Example:
     * @param ShipHazardousCommodityQuantityDetail002 $quantity
     * @return $this
     */
    public function setQuantity(ShipHazardousCommodityQuantityDetail002 $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return ShipHazardousCommodityQuantityDetail002
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }
}
