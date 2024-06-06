<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the descriptive data for the recipient location to which the shipment is to be received.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeRecipient_address $address

 */
class AvTransitTimeRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRecipient';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param AvTransitTimeRecipient_address $address
     * @return $this
     */
    public function setAddress(AvTransitTimeRecipient_address $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvTransitTimeRecipient_address
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
