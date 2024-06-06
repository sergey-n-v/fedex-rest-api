<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are specific information about the pending email label.<br>Required when PendingShipmentType is EMAIL.<br>Not applicable for CreateTag.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipEmailRecipient[] $recipients
 * @property string $message

 */
class ShipEmailLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipEmailLabelDetail';

    /**
     * Set recipients
     *
     * 
     * Example: 
     * @param ShipEmailRecipient[] $recipients
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
     * @return ShipEmailRecipient[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Set message
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
