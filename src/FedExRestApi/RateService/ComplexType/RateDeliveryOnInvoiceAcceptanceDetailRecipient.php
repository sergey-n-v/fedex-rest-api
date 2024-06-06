<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * RateDeliveryOnInvoiceAcceptanceDetailRecipient
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateDeliveryOnInvoiceAcceptanceDetailRecipient_address $address
 * @property RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact $contact

 */
class RateDeliveryOnInvoiceAcceptanceDetailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDeliveryOnInvoiceAcceptanceDetailRecipient';

    /**
     * Set address
     *
     *
     * Example:
     * @param RateDeliveryOnInvoiceAcceptanceDetailRecipient_address $address
     * @return $this
     */
    public function setAddress(RateDeliveryOnInvoiceAcceptanceDetailRecipient_address $address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return RateDeliveryOnInvoiceAcceptanceDetailRecipient_address
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
     * @param RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact $contact
     * @return $this
     */
    public function setContact(RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact $contact)
    {
        $this->values['contact'] = $contact;
        return $this;
    }

    /**
     * Get contact
     *
     * @return RateDeliveryOnInvoiceAcceptanceDetailRecipient_contact
     */
    public function getContact()
    {
        return $this->values['contact'];
    }
}
