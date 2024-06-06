<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Location Contact And Address.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackAddressVO1 $address

 */
class TrackContactAndAddress1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackContactAndAddress1';

    /**
     * Set address
     *
     *
     * Example:
     * @param TrackAddressVO1 $address
     * @return $this
     */
    public function setAddress(TrackAddressVO1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return TrackAddressVO1
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
