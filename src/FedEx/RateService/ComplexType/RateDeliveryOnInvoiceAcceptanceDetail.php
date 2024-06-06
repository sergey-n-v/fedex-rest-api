<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateDeliveryOnInvoiceAcceptanceDetailRecipient $recipient

 */
class RateDeliveryOnInvoiceAcceptanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDeliveryOnInvoiceAcceptanceDetail';

    /**
     * Set recipient
     *
     * 
     * Example: 
     * @param RateDeliveryOnInvoiceAcceptanceDetailRecipient $recipient
     * @return $this
     */
    public function setRecipient(RateDeliveryOnInvoiceAcceptanceDetailRecipient $recipient)
    {
        $this->values['recipient'] = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return RateDeliveryOnInvoiceAcceptanceDetailRecipient
     */
    public function getRecipient()
    {
        return $this->values['recipient'];
    }
}
