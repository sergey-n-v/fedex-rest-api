<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are contact and address details for this special service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvAddress $address
 * @property AvContact $contact

 */
class AvParsedContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvParsedContactAndAddress';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param AvAddress $address
     * @return $this
     */
    public function setAddress(AvAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return AvAddress
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param AvContact $contact
     * @return $this
     */
    public function setContact(AvContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return AvContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
