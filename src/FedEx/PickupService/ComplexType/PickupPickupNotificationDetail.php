<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupPickupNotificationDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property PickupEmailDetail[] $emailDetails
 * @property string $format
 * @property string $userMessage

 */
class PickupPickupNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupNotificationDetail';

    /**
     * Specify the list of email addresses along with locale to which the pickup confirmation email should be sent.
     *
     * 
     * Example: 
     * @param PickupEmailDetail[] $emailDetails
     * @return $this
     */
    public function setEmailDetails(array $emailDetails)
    {
        $this->values['emailDetails'] = $emailDetails;
        return $this;
    }

    /**
     * Get emailDetails
     *
     * @return PickupEmailDetail[]
     */
    public function getEmailDetails()
    {
        return $this->values['emailDetails'];
    }

    /**
     * Specifies the format of email.
     *
     * simpleClass: PickupFormat
     * Example: HTML
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $this->values['format'] = $format;
        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->values['format'];
    }

    /**
     * Specifies the user message that can be sent as part of the pickup confirmation email.<br>Example: This is the user message
     *
     * 
     * Example: This is the user message
     * @param string $userMessage
     * @return $this
     */
    public function setUserMessage($userMessage)
    {
        $this->values['userMessage'] = $userMessage;
        return $this;
    }

    /**
     * Get userMessage
     *
     * @return string
     */
    public function getUserMessage()
    {
        return $this->values['userMessage'];
    }
}
