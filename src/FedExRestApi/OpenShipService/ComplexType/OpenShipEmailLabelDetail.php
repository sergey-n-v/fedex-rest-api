<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipEmailRecipient[] $recipients
 * @property string $message

 */
class OpenShipEmailLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipEmailLabelDetail';

    /**
     * This is Email label recipient email address, shipment role, & language locale details. Atleast one entry must be specified.
     *
     *
     * Example:
     * @param OpenShipEmailRecipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->values['recipients'] = $recipients;
        return $this;
    }

    /**
     * Get recipients
     *
     * @return OpenShipEmailRecipient[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * This is an optional personalized message to be included in the email to the recipient.
     *
     *
     * Example: your optional message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
