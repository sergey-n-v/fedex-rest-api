<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateContact_2 $contact
 * @property RateAddress_1 $address

 */
class RateContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateContactAndAddress';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param RateContact_2 $contact
     * @return $this
     */
    public function setContact(RateContact_2 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return RateContact_2
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
     * @param RateAddress_1 $address
     * @return $this
     */
    public function setAddress(RateAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return RateAddress_1
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
