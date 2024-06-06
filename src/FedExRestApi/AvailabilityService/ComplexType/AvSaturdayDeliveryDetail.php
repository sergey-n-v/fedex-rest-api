<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are service elements for Saturday Delivery special service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvParsedContactAndAddress $locationContactAndAddress

 */
class AvSaturdayDeliveryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvSaturdayDeliveryDetail';

    /**
     * Set locationContactAndAddress
     *
     *
     * Example:
     * @param AvParsedContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(AvParsedContactAndAddress $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return AvParsedContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }
}
