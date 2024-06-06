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
 * @property TrackContactVO_1 $contact
 * @property TrackAddressVO_1 $address

 */
class TrackContactAndAddress_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackContactAndAddress_1';

    /**
     * Set contact
     *
     *
     * Example:
     * @param TrackContactVO_1 $contact
     * @return $this
     */
    public function setContact(TrackContactVO_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return TrackContactVO_1
     */
    public function getContact()
    {
        return $this->values['contact'];
    }

    /**
     * Set address
     *
     *
     * Example:
     * @param TrackAddressVO_1 $address
     * @return $this
     */
    public function setAddress(TrackAddressVO_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return TrackAddressVO_1
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
