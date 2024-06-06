<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request to receive a tracking notification.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $senderContactName
 * @property string $senderEMailAddress
 * @property TrackTrackingEventNotificationDetail $trackingEventNotificationDetail
 * @property TrackTrackingNumberInfo $trackingNumberInfo
 * @property string $shipDateBegin
 * @property string $shipDateEnd

 */
class TrackFull_Schema_Notification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_Notification';

    /**
     * Set senderContactName
     *
     * 
     * Example: Sam Smith
     * @param string $senderContactName
     * @return $this
     */
    public function setSenderContactName($senderContactName)
    {
        $this->values['senderContactName'] = $senderContactName;
        return $this;
    }

    /**
     * Get senderContactName
     *
     * @return string
     */
    public function getSenderContactName()
    {
        return $this->values['senderContactName'];
    }

    /**
     * Set senderEMailAddress
     *
     * 
     * Example: Lsr1234@gmail.com
     * @param string $senderEMailAddress
     * @return $this
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->values['senderEMailAddress'] = $senderEMailAddress;
        return $this;
    }

    /**
     * Get senderEMailAddress
     *
     * @return string
     */
    public function getSenderEMailAddress()
    {
        return $this->values['senderEMailAddress'];
    }

    /**
     * Set trackingEventNotificationDetail
     *
     * 
     * Example: 
     * @param TrackTrackingEventNotificationDetail $trackingEventNotificationDetail
     * @return $this
     */
    public function setTrackingEventNotificationDetail(TrackTrackingEventNotificationDetail $trackingEventNotificationDetail)
    {
        $this->values['trackingEventNotificationDetail'] = $trackingEventNotificationDetail;
        return $this;
    }

    /**
     * Get trackingEventNotificationDetail
     *
     * @return TrackTrackingEventNotificationDetail
     */
    public function getTrackingEventNotificationDetail()
    {
        return $this->values['trackingEventNotificationDetail'];
    }

    /**
     * Set trackingNumberInfo
     *
     * 
     * Example: 
     * @param TrackTrackingNumberInfo $trackingNumberInfo
     * @return $this
     */
    public function setTrackingNumberInfo(TrackTrackingNumberInfo $trackingNumberInfo)
    {
        $this->values['trackingNumberInfo'] = $trackingNumberInfo;
        return $this;
    }

    /**
     * Get trackingNumberInfo
     *
     * @return TrackTrackingNumberInfo
     */
    public function getTrackingNumberInfo()
    {
        return $this->values['trackingNumberInfo'];
    }

    /**
     * Set shipDateBegin
     *
     * 
     * Example: 2019-10-13
     * @param string $shipDateBegin
     * @return $this
     */
    public function setShipDateBegin($shipDateBegin)
    {
        $this->values['shipDateBegin'] = $shipDateBegin;
        return $this;
    }

    /**
     * Get shipDateBegin
     *
     * @return string
     */
    public function getShipDateBegin()
    {
        return $this->values['shipDateBegin'];
    }

    /**
     * Set shipDateEnd
     *
     * 
     * Example: 2019-10-31
     * @param string $shipDateEnd
     * @return $this
     */
    public function setShipDateEnd($shipDateEnd)
    {
        $this->values['shipDateEnd'] = $shipDateEnd;
        return $this;
    }

    /**
     * Get shipDateEnd
     *
     * @return string
     */
    public function getShipDateEnd()
    {
        return $this->values['shipDateEnd'];
    }
}
