<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackSendNotificationOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTrackingNumberInfo_2 $TrackingNumberInfo
 * @property TrackAddressVO $destinationAddress
 * @property string $recipientDetails
 * @property TrackAlert[] $alerts

 */
class TrackSendNotificationOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackSendNotificationOutputVO';

    /**
     * Set TrackingNumberInfo
     *
     * 
     * Example: 
     * @param TrackTrackingNumberInfo_2 $trackingNumberInfo
     * @return $this
     */
    public function setTrackingNumberInfo(TrackTrackingNumberInfo_2 $trackingNumberInfo)
    {
        $this->values['TrackingNumberInfo'] = $trackingNumberInfo;
        return $this;
    }

    /**
     * Get TrackingNumberInfo
     *
     * @return TrackTrackingNumberInfo_2
     */
    public function getTrackingNumberInfo()
    {
        return $this->values['TrackingNumberInfo'];
    }

    /**
     * Set destinationAddress
     *
     * 
     * Example: 
     * @param TrackAddressVO $destinationAddress
     * @return $this
     */
    public function setDestinationAddress(TrackAddressVO $destinationAddress)
    {
        $this->values['destinationAddress'] = $destinationAddress;
        return $this;
    }

    /**
     * Get destinationAddress
     *
     * @return TrackAddressVO
     */
    public function getDestinationAddress()
    {
        return $this->values['destinationAddress'];
    }

    /**
     * Set recipientDetails
     *
     * 
     * Example: 
     * @param string $recipientDetails
     * @return $this
     */
    public function setRecipientDetails(array $recipientDetails)
    {
        $this->values['recipientDetails'] = $recipientDetails;
        return $this;
    }

    /**
     * Get recipientDetails
     *
     * @return string
     */
    public function getRecipientDetails()
    {
        return $this->values['recipientDetails'];
    }

    /**
     * Set alerts
     *
     * 
     * Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     * @param TrackAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return TrackAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
