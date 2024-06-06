<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipContact_1 $contact
 * @property ShipAddress_1 $address

 */
class ShipContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipContactAndAddress';

    /**
     * Set contact
     *
     *
     * Example:
     * @param ShipContact_1 $contact
     * @return $this
     */
    public function setContact(ShipContact_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return ShipContact_1
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
