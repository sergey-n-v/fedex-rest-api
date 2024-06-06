<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipJustContactAndAddress
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipAddress $address
 * @property ShipContact $contact

 */
class ShipJustContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipJustContactAndAddress';

    /**
     * Set address
     *
     * 
     * Example: 
     * @param ShipAddress $address
     * @return $this
     */
    public function setAddress(ShipAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return ShipAddress
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
     * @param ShipContact $contact
     * @return $this
     */
    public function setContact(ShipContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return ShipContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
