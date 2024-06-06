<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The descriptive data on the physical location of shipment origin.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeShipper $address

 */
class AvTransitTimeRequestedShipment_shipper extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipper';

    /**
     * Set address
     *
     *
     * Example:
     * @param AvTransitTimeShipper $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvTransitTimeShipper
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
