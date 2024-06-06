<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are broker details for the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipParty_1 $broker
 * @property string $type

 */
class OpenShipBrokerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipBrokerDetail';

    /**
     * These are broker details for the shipment with physical address, contact and account number information.
     *
     * 
     * Example: 
     * @param OpenShipParty_1|OpenShipBroker $broker
     * @return $this
     */
    public function setBroker($broker)
    {
        $this->values['broker'] = $broker;
        return $this;
    }

    /**
     * Get broker
     *
     * @return OpenShipParty_1|OpenShipBroker
     */
    public function getBroker()
    {
        return $this->values['broker'];
    }

    /**
     * Identifies the type of broker.
     *
     * simpleClass: OpenShipType
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
