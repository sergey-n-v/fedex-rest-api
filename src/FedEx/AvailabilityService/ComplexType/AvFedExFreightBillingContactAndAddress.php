<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AvFedExFreightBillingContactAndAddress
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property  $address
 * @property  $contact

 */
class AvFedExFreightBillingContactAndAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvFedExFreightBillingContactAndAddress';

    /**
     * Billing address information for FedEx Freight Shipment.
     *
     * 
     * Example: 
     * @param  $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return 
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Billing contact information for FedEx Freight Shipment.
     *
     * 
     * Example: 
     * @param  $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return 
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
