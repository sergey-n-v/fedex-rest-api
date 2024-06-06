<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FedEx scanning event information for a package.<br><a onclick='loadDocReference("trackservicescancodes")'>Click here to see Track Service Scan Codes.</a>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $date
 * @property string $derivedStatus
 * @property TrackAddressVO1 $scanLocation
 * @property string $locationId
 * @property string $locationType
 * @property string $exceptionDescription
 * @property string $eventDescription
 * @property string $eventType
 * @property string $derivedStatusCode
 * @property string $exceptionCode
 * @property TrackDelayDetail $delayDetail

 */
class TrackScanEvent extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackScanEvent';

    /**
     * Set date
     *
     * 
     * Example: 2018-02-02T12:01:00-07:00
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['date'] = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->values['date'];
    }

    /**
     * Set derivedStatus
     *
     * 
     * Example: Picked Up
     * @param string $derivedStatus
     * @return $this
     */
    public function setDerivedStatus($derivedStatus)
    {
        $this->values['derivedStatus'] = $derivedStatus;
        return $this;
    }

    /**
     * Get derivedStatus
     *
     * @return string
     */
    public function getDerivedStatus()
    {
        return $this->values['derivedStatus'];
    }

    /**
     * Set scanLocation
     *
     * 
     * Example: 
     * @param TrackAddressVO1 $scanLocation
     * @return $this
     */
    public function setScanLocation(TrackAddressVO1 $scanLocation)
    {
        $this->values['scanLocation'] = $scanLocation;
        return $this;
    }

    /**
     * Get scanLocation
     *
     * @return TrackAddressVO1
     */
    public function getScanLocation()
    {
        return $this->values['scanLocation'];
    }

    /**
     * Set locationId
     *
     * 
     * Example: SEA
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['locationId'] = $locationId;
        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->values['locationId'];
    }

    /**
     * Set locationType
     *
     * simpleClass: TrackLocationType
     * Example: CUSTOMS_BROKER
     * @param string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['locationType'] = $locationType;
        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->values['locationType'];
    }

    /**
     * Set exceptionDescription
     *
     * 
     * Example: Package available for clearance
     * @param string $exceptionDescription
     * @return $this
     */
    public function setExceptionDescription($exceptionDescription)
    {
        $this->values['exceptionDescription'] = $exceptionDescription;
        return $this;
    }

    /**
     * Get exceptionDescription
     *
     * @return string
     */
    public function getExceptionDescription()
    {
        return $this->values['exceptionDescription'];
    }

    /**
     * Set eventDescription
     *
     * 
     * Example: Picked Up
     * @param string $eventDescription
     * @return $this
     */
    public function setEventDescription($eventDescription)
    {
        $this->values['eventDescription'] = $eventDescription;
        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->values['eventDescription'];
    }

    /**
     * Set eventType
     *
     * 
     * Example: PU
     * @param string $eventType
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->values['eventType'] = $eventType;
        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->values['eventType'];
    }

    /**
     * Set derivedStatusCode
     *
     * 
     * Example: PU
     * @param string $derivedStatusCode
     * @return $this
     */
    public function setDerivedStatusCode($derivedStatusCode)
    {
        $this->values['derivedStatusCode'] = $derivedStatusCode;
        return $this;
    }

    /**
     * Get derivedStatusCode
     *
     * @return string
     */
    public function getDerivedStatusCode()
    {
        return $this->values['derivedStatusCode'];
    }

    /**
     * Set exceptionCode
     *
     * 
     * Example: A25
     * @param string $exceptionCode
     * @return $this
     */
    public function setExceptionCode($exceptionCode)
    {
        $this->values['exceptionCode'] = $exceptionCode;
        return $this;
    }

    /**
     * Get exceptionCode
     *
     * @return string
     */
    public function getExceptionCode()
    {
        return $this->values['exceptionCode'];
    }

    /**
     * Set delayDetail
     *
     * 
     * Example: 
     * @param TrackDelayDetail $delayDetail
     * @return $this
     */
    public function setDelayDetail(TrackDelayDetail $delayDetail)
    {
        $this->values['delayDetail'] = $delayDetail;
        return $this;
    }

    /**
     * Get delayDetail
     *
     * @return TrackDelayDetail
     */
    public function getDelayDetail()
    {
        return $this->values['delayDetail'];
    }
}
