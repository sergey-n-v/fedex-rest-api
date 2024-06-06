<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the contact and address details of a location.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipContact_1 $contact
 * @property OpenShipAddress_1 $address

 */
class OpenShipContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipContactAndAddress';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param OpenShipContact_1 $contact
     * @return $this
     */
    public function setContact(OpenShipContact_1 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipContact_1
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
     * @param OpenShipAddress_1 $address
     * @return $this
     */
    public function setAddress(OpenShipAddress_1 $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return OpenShipAddress_1
     */
    public function getAddress()
    {
        return $this->values['address'];
    }
}
