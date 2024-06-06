<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is used to provide eMail notification information..
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $aggregationType
 * @property OpenShipShipShipmentEmailNotificationRecipient[] $emailNotificationRecipients
 * @property string $personalMessage

 */
class OpenShipShipShipmentEMailNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShipShipmentEMailNotificationDetail';

    /**
     * This is the shipment Notification Aggregation Type.
     *
     * simpleClass: OpenShipAggregationType
     * Example: PER_PACKAGE
     * @param string $aggregationType
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->values['aggregationType'] = $aggregationType;
        return $this;
    }

    /**
     * Get aggregationType
     *
     * @return string
     */
    public function getAggregationType()
    {
        return $this->values['aggregationType'];
    }

    /**
     * These are email notification recipient details.
     *
     * 
     * Example: 
     * @param OpenShipShipShipmentEmailNotificationRecipient[] $emailNotificationRecipients
     * @return $this
     */
    public function setEmailNotificationRecipients(array $emailNotificationRecipients)
    {
        $this->values['emailNotificationRecipients'] = $emailNotificationRecipients;
        return $this;
    }

    /**
     * Get emailNotificationRecipients
     *
     * @return OpenShipShipShipmentEmailNotificationRecipient[]
     */
    public function getEmailNotificationRecipients()
    {
        return $this->values['emailNotificationRecipients'];
    }

    /**
     * This is your personal message for the email.<br><br>Note: The maximum personal message character limit depends on the element notificationFormatType values:<ul><li>If notificationFormatType is TEXT, then only 120 characters printed on the email</li><li>If notificationFormatType is HTML, then 500 characters printed on the email</li></ul><br>Example: This is concerning the order 123456 of 26 July 2021 - art no 34324-23 Teddy Bear, brown
     *
     * 
     * Example: your personal message here
     * @param string $personalMessage
     * @return $this
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->values['personalMessage'] = $personalMessage;
        return $this;
    }

    /**
     * Get personalMessage
     *
     * @return string
     */
    public function getPersonalMessage()
    {
        return $this->values['personalMessage'];
    }
}
