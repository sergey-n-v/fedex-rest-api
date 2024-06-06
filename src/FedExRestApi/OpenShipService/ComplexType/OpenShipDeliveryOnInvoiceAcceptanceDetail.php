<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate the Delivery On Invoice Acceptance detail. Recipient is required for Delivery On Invoice Special service.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipRecipientsParty $recipient

 */
class OpenShipDeliveryOnInvoiceAcceptanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDeliveryOnInvoiceAcceptanceDetail';

    /**
     * The descriptive data for the recipient of the shipment and the physical location for the shipment destination.
     *
     *
     * Example:
     * @param OpenShipRecipientsParty|OpenShipRecipient $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->values['recipient'] = $recipient;
        return $this;
    }

    /**
     * Get recipient
     *
     * @return OpenShipRecipientsParty|OpenShipRecipient
     */
    public function getRecipient()
    {
        return $this->values['recipient'];
    }
}
