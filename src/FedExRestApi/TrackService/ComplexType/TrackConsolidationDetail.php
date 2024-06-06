<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the consolidation details for packages within a shipment identified as CONSOLIDATED.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $timeStamp
 * @property string $consolidationID
 * @property TrackReasonDetail $reasonDetail
 * @property int $packageCount
 * @property string $eventType

 */
class TrackConsolidationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackConsolidationDetail';

    /**
     * Set timeStamp
     *
     *
     * Example: 2020-10-13T03:54:44-06:00
     * @param string $timeStamp
     * @return $this
     */
    public function setTimeStamp($timeStamp)
    {
        $this->values['timeStamp'] = $timeStamp;
        return $this;
    }

    /**
     * Get timeStamp
     *
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->values['timeStamp'];
    }

    /**
     * Set consolidationID
     *
     *
     * Example: 47936927
     * @param string $consolidationID
     * @return $this
     */
    public function setConsolidationID($consolidationID)
    {
        $this->values['consolidationID'] = $consolidationID;
        return $this;
    }

    /**
     * Get consolidationID
     *
     * @return string
     */
    public function getConsolidationID()
    {
        return $this->values['consolidationID'];
    }

    /**
     * Set reasonDetail
     *
     *
     * Example:
     * @param TrackReasonDetail $reasonDetail
     * @return $this
     */
    public function setReasonDetail(TrackReasonDetail $reasonDetail)
    {
        $this->values['reasonDetail'] = $reasonDetail;
        return $this;
    }

    /**
     * Get reasonDetail
     *
     * @return TrackReasonDetail
     */
    public function getReasonDetail()
    {
        return $this->values['reasonDetail'];
    }

    /**
     * Set packageCount
     *
     *
     * Example: 25
     * @param int $packageCount
     * @return $this
     */
    public function setPackageCount($packageCount)
    {
        $this->values['packageCount'] = $packageCount;
        return $this;
    }

    /**
     * Get packageCount
     *
     * @return int
     */
    public function getPackageCount()
    {
        return $this->values['packageCount'];
    }

    /**
     * Set eventType
     *
     *
     * Example: PACKAGE_ADDED_TO_CONSOLIDATION
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
}
