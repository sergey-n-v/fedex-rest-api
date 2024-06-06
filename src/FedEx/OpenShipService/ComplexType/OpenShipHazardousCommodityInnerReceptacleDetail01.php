<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipHazardousCommodityInnerReceptacleDetail01
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipHazardousCommodityQuantityDetail002 $quantity

 */
class OpenShipHazardousCommodityInnerReceptacleDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHazardousCommodityInnerReceptacleDetail01';

    /**
     * Set quantity
     *
     * 
     * Example: 
     * @param OpenShipHazardousCommodityQuantityDetail002 $quantity
     * @return $this
     */
    public function setQuantity(OpenShipHazardousCommodityQuantityDetail002 $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return OpenShipHazardousCommodityQuantityDetail002
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }
}
