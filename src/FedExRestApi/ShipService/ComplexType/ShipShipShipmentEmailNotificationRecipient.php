<?php
namespace FedExRestApi\ShipService\ComplexType;

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
class ShipShipShipmentEmailNotificationRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipShipmentEmailNotificationRecipient';

    /**
     * Set name
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
     * Set emailNotificationRecipientType
     *
     * simpleClass: ShipEmailNotificationRecipientType
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
     * Set emailAddress
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
     * Set notificationFormatType
     *
     * simpleClass: ShipNotificationFormatType
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
     * Set notificationType
     *
     * simpleClass: ShipNotificationType
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
     * Set locale
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
     * Set notificationEventType
     *
     * simpleClass: ShipNotificationEventType
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
