<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipRecipientsParty $recipient

 */
class ShipDeliveryOnInvoiceAcceptanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDeliveryOnInvoiceAcceptanceDetail';

    /**
     * Set recipient
     *
     *
     * Example:
     * @param ShipRecipientsParty $recipient
     * @return $this
     */
    public function setRecipient(ShipRecipientsParty $recipient)
    {
        $this->values['recipient'] = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return ShipRecipientsParty
     */
    public function getRecipient()
    {
        return $this->values['recipient'];
    }
}
