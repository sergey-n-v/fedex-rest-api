<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Describes specific information about the email label shipment.<ul><li>Message: Content of the email message</li><li>Recipients: EMailRecipient</li><li>emailAddress - email address of the recipient</li><li>role - role type of the recipient</li><li>optionsRequested</li><li>localization</li>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateEmailRecipient[] $recipients
 * @property string $message

 */
class RateEmailLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEmailLabelDetail';

    /**
     * Set recipients
     *
     *
     * Example:
     * @param RateEmailRecipient[] $recipients
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
     * @return RateEmailRecipient[]
     */
    public function getRecipients()
    {
        return $this->values['recipients'];
    }

    /**
     * Set message
     *
     *
     * Example:
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
