<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are recipient details for receiving email notification.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $name
 * @property string $emailNotificationRecipientType
 * @property string $emailAddress
 * @property string $notificationFormatType
 * @property string $notificationType
 * @property string $locale
 * @property string $notificationEventType

 */
class OpenShipEmailNotificationRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipEmailNotificationRecipient';

    /**
     * Specify the recipient name.<br>Example: Joe Smith
     *
     *
     * Example: Joe Smith
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * Specify the recipient type for email notification.
     *
     * simpleClass: OpenShipEmailNotificationRecipientType
     * Example: SHIPPER
     * @param string $emailNotificationRecipientType
     * @return $this
     */
    public function setEmailNotificationRecipientType($emailNotificationRecipientType)
    {
        $this->values['emailNotificationRecipientType'] = $emailNotificationRecipientType;
        return $this;
    }

    /**
     * Get emailNotificationRecipientType
     *
     * @return string
     */
    public function getEmailNotificationRecipientType()
    {
        return $this->values['emailNotificationRecipientType'];
    }

    /**
     * Specify the recipient email address.<br>Example: xyz@aol.com
     *
     *
     * Example: jsmith3@aol.com
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->values['emailAddress'] = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->values['emailAddress'];
    }

    /**
     * This is the format for the email notification. Either HTML or plain text can be provided.
     *
     * simpleClass: OpenShipNotificationFormatType
     * Example: TEXT
     * @param string $notificationFormatType
     * @return $this
     */
    public function setNotificationFormatType($notificationFormatType)
    {
        $this->values['notificationFormatType'] = $notificationFormatType;
        return $this;
    }

    /**
     * Get notificationFormatType
     *
     * @return string
     */
    public function getNotificationFormatType()
    {
        return $this->values['notificationFormatType'];
    }

    /**
     * Indicate the type of notification that will be sent as an email.
     *
     * simpleClass: OpenShipNotificationType
     * Example: EMAIL
     * @param string $notificationType
     * @return $this
     */
    public function setNotificationType($notificationType)
    {
        $this->values['notificationType'] = $notificationType;
        return $this;
    }

    /**
     * Get notificationType
     *
     * @return string
     */
    public function getNotificationType()
    {
        return $this->values['notificationType'];
    }

    /**
     * These are the locale details for email.<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     *
     * Example: en_US
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->values['locale'] = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->values['locale'];
    }

    /**
     * Specify notification event types.<br><a onclick='loadDocReference("notificationeventtypes")'>Click here for more information on Notification Event Types.</a>
     *
     * simpleClass: OpenShipNotificationEventType
     * Example: ["ON_PICKUP_DRIVER_ARRIVED","ON_SHIPMENT"]
     * @param string $notificationEventType
     * @return $this
     */
    public function setNotificationEventType(array $notificationEventType)
    {
        $this->values['notificationEventType'] = $notificationEventType;
        return $this;
    }

    /**
     * Get notificationEventType
     *
     * @return string
     */
    public function getNotificationEventType()
    {
        return $this->values['notificationEventType'];
    }
}
