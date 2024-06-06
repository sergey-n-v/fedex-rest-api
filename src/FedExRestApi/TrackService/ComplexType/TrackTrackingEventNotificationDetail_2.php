<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Tracking Event Notification details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackingNotification[] $trackingNotifications
 * @property string $personalMessage
 * @property  $supportHTML

 */
class TrackTrackingEventNotificationDetail_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingEventNotificationDetail_2';

    /**
     * Set trackingNotifications
     *
     *
     * Example:
     * @param TrackTrackingNotification[] $trackingNotifications
     * @return $this
     */
    public function setTrackingNotifications(array $trackingNotifications)
    {
        $this->values['trackingNotifications'] = $trackingNotifications;
        return $this;
    }

    /**
     * Get trackingNotifications
     *
     * @return TrackTrackingNotification[]
     */
    public function getTrackingNotifications()
    {
        return $this->values['trackingNotifications'];
    }

    /**
     * Set personalMessage
     *
     *
     * Example: Personal message content
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

    /**
     * Set supportHTML
     *
     *
     * Example:
     * @param  $supportHTML
     * @return $this
     */
    public function setSupportHTML($supportHTML)
    {
        $this->values['supportHTML'] = $supportHTML;
        return $this;
    }

    /**
     * Get supportHTML
     *
     * @return
     */
    public function getSupportHTML()
    {
        return $this->values['supportHTML'];
    }
}
