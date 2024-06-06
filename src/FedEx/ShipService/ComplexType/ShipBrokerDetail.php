<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are broker details for the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipParty_1 $broker
 * @property string $type

 */
class ShipBrokerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipBrokerDetail';

    /**
     * Set broker
     *
     * 
     * Example: 
     * @param ShipParty_1 $broker
     * @return $this
     */
    public function setBroker(ShipParty_1 $broker)
    {
        $this->values['broker'] = $broker;
        return $this;
    }

    /**
     * Get broker
     *
     * @return ShipParty_1
     */
    public function getBroker()
    {
        return $this->values['broker'];
    }

    /**
     * Set type
     *
     * simpleClass: ShipType
     * Example: IMPORT
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }
}
