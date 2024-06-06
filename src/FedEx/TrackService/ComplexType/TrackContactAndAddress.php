<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Location Contact And Address.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackContactVO $contact
 * @property TrackAddressVO $address

 */
class TrackContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackContactAndAddress';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param TrackContactVO $contact
     * @return $this
     */
    public function setContact(TrackContactVO $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return TrackContactVO
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
     * @param TrackAddressVO $address
     * @return $this
     */
    public function setAddress(TrackAddressVO $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return TrackAddressVO
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
