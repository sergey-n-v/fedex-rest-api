<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Information about the notification email and the language of the notification requested.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackLocalization $localization
 * @property TrackEmailDetail $emailDetail
 * @property string $notificationType

 */
class TrackTrackingNotificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingNotificationDetail';

    /**
     * Set localization
     *
     *
     * Example:
     * @param TrackLocalization $localization
     * @return $this
     */
    public function setLocalization(TrackLocalization $localization)
    {
        $this->values['localization'] = $localization;
        return $this;
    }

    /**
     * Get localization
     *
     * @return TrackLocalization
     */
    public function getLocalization()
    {
        return $this->values['localization'];
    }

    /**
     * Set emailDetail
     *
     *
     * Example:
     * @param TrackEmailDetail $emailDetail
     * @return $this
     */
    public function setEmailDetail(TrackEmailDetail $emailDetail)
    {
        $this->values['emailDetail'] = $emailDetail;
        return $this;
    }

    /**
     * Get emailDetail
     *
     * @return TrackEmailDetail
     */
    public function getEmailDetail()
    {
        return $this->values['emailDetail'];
    }

    /**
     * Set notificationType
     *
     *
     * Example: HTML
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
}
