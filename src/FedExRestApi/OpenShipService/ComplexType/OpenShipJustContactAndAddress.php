<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipJustContactAndAddress
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipAddress $address
 * @property OpenShipContact $contact

 */
class OpenShipJustContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipJustContactAndAddress';

    /**
     * Set address
     *
     *
     * Example:
     * @param OpenShipAddress $address
     * @return $this
     */
    public function setAddress(OpenShipAddress $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return OpenShipAddress
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
     * @param OpenShipContact $contact
     * @return $this
     */
    public function setContact(OpenShipContact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return OpenShipContact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
