<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Data specifying the recipient(s) of notifications related to the movement of the shipment. At a minimnum an EmailnotificationRecipientType, at least one NoficationEventType, and an EmailAddress are required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property string $notificationEventType
 * @property RateSmsDetail $smsDetail
 * @property string $notificationFormatType
 * @property string $emailNotificationRecipientType
 * @property string $notificationType
 * @property string $locale

 */
class RateEmailNotificationRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEmailNotificationRecipient';

    /**
     * Set emailAddress
     *
     *
     * Example:
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
     * Set notificationEventType
     *
     * simpleClass: RateNotificationEventType
     * Example:
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

    /**
     * Set smsDetail
     *
     *
     * Example:
     * @param RateSmsDetail $smsDetail
     * @return $this
     */
    public function setSmsDetail(RateSmsDetail $smsDetail)
    {
        $this->values['smsDetail'] = $smsDetail;
        return $this;
    }

    /**
     * Get smsDetail
     *
     * @return RateSmsDetail
     */
    public function getSmsDetail()
    {
        return $this->values['smsDetail'];
    }

    /**
     * Set notificationFormatType
     *
     * simpleClass: RateNotificationFormatType
     * Example:
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
     * Set emailNotificationRecipientType
     *
     * simpleClass: RateEmailNotificationRecipientType
     * Example:
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
     * Set notificationType
     *
     * simpleClass: RateNotificationType
     * Example:
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
     * Example:
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
}
