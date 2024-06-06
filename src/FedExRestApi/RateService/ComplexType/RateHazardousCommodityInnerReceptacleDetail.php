<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This describes information about the inner receptacles for the hazardous commodity in a particular dangerous goods container.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateHazardousCommodityQuantityDetail $quantity

 */
class RateHazardousCommodityInnerReceptacleDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHazardousCommodityInnerReceptacleDetail';

    /**
     * Set quantity
     *
     *
     * Example:
     * @param RateHazardousCommodityQuantityDetail $quantity
     * @return $this
     */
    public function setQuantity(RateHazardousCommodityQuantityDetail $quantity)
    {
        $this->values['quantity'] = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return RateHazardousCommodityQuantityDetail
     */
    public function getQuantity()
    {
        return $this->values['quantity'];
    }
}
