<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipCreateTagRequestedShipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $pickupDetail

 */
class ShipCreateTagRequestedShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCreateTagRequestedShipment';

    /**
     * Set pickupDetail
     *
     *
     * Example:
     * @param  $pickupDetail
     * @return $this
     */
    public function setPickupDetail($pickupDetail)
    {
        $this->values['pickupDetail'] = $pickupDetail;
        return $this;
    }

    /**
     * Get pickupDetail
     *
     * @return
     */
    public function getPickupDetail()
    {
        return $this->values['pickupDetail'];
    }
}
