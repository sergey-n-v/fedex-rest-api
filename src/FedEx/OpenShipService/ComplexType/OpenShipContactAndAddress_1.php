<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify a contact and address instead of the sender address that will be printed on FedEx label. The sender address will be printed if it is not provided.Using this, you can designate a return address that's different from the sender's. The destination address must be in the same country as the sender.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipContact_2 $contact
 * @property OpenShipAddress_1 $address

 */
class OpenShipContactAndAddress_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipContactAndAddress_1';

    /**
     * Set contact
     *
     * 
     * Example: 
     * @param OpenShipContact_2 $contact
     * @return $this
     */
    public function setContact(OpenShipContact_2 $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipContact_2
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
