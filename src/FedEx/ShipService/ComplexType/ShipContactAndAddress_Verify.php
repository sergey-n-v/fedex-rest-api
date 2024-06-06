<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipContact_verify $contact
 * @property ShipAddress_1 $address

 */
class ShipContactAndAddress_Verify extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipContactAndAddress_Verify';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param ShipContact_verify $contact
     * @return $this
     */
    public function setContact(ShipContact_verify $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return ShipContact_verify
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
     * @param ShipAddress_1 $address
     * @return $this
     */
    public function setAddress(ShipAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return ShipAddress_1
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
