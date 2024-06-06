<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies a list of details for Tracking Notifications
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackingNotificationDetail $notificationDetail
 * @property string $role
 * @property string $notificationEventTypes
 * @property boolean $currentResultRequestedFlag

 */
class TrackTrackingNotification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingNotification';

    /**
     * Set notificationDetail
     *
     * 
     * Example: 
     * @param TrackTrackingNotificationDetail $notificationDetail
     * @return $this
     */
    public function setNotificationDetail(TrackTrackingNotificationDetail $notificationDetail)
    {
        $this->values['notificationDetail'] = $notificationDetail;
        return $this;
    }

    /**
     * Get notificationDetail
     *
     * @return TrackTrackingNotificationDetail
     */
    public function getNotificationDetail()
    {
        return $this->values['notificationDetail'];
    }

    /**
     * Set role
     *
     * 
     * Example: SHIPPER
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['role'] = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->values['role'];
    }

    /**
     * Set notificationEventTypes
     *
     * 
     * Example: ["ON_DELIVERY","ON_EXCEPTION","ON_ESTIMATED_DELIVERY"]
     * @param string $notificationEventTypes
     * @return $this
     */
    public function setNotificationEventTypes(array $notificationEventTypes)
    {
        $this->values['notificationEventTypes'] = $notificationEventTypes;
        return $this;
    }

    /**
     * Get notificationEventTypes
     *
     * @return string
     */
    public function getNotificationEventTypes()
    {
        return $this->values['notificationEventTypes'];
    }

    /**
     * Set currentResultRequestedFlag
     *
     * 
     * Example: 1
     * @param boolean $currentResultRequestedFlag
     * @return $this
     */
    public function setCurrentResultRequestedFlag($currentResultRequestedFlag)
    {
        $this->values['currentResultRequestedFlag'] = $currentResultRequestedFlag;
        return $this;
    }

    /**
     * Get currentResultRequestedFlag
     *
     * @return boolean
     */
    public function getCurrentResultRequestedFlag()
    {
        return $this->values['currentResultRequestedFlag'];
    }
}
