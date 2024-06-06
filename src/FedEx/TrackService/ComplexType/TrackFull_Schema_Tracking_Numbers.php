<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request elements for Tracking by Tracking Number.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $includeDetailedScans
 * @property TrackTrackingInfo[] $trackingInfo

 */
class TrackFull_Schema_Tracking_Numbers extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_Tracking_Numbers';

    /**
     * Set includeDetailedScans
     *
     * 
     * Example: 
     * @param boolean $includeDetailedScans
     * @return $this
     */
    public function setIncludeDetailedScans($includeDetailedScans)
    {
        $this->values['includeDetailedScans'] = $includeDetailedScans;
        return $this;
    }

    /**
     * Get includeDetailedScans
     *
     * @return boolean
     */
    public function getIncludeDetailedScans()
    {
        return $this->values['includeDetailedScans'];
    }

    /**
     * Set trackingInfo
     *
     * 
     * Example: 
     * @param TrackTrackingInfo[] $trackingInfo
     * @return $this
     */
    public function setTrackingInfo(array $trackingInfo)
    {
        $this->values['trackingInfo'] = $trackingInfo;
        return $this;
    }

    /**
     * Get trackingInfo
     *
     * @return TrackTrackingInfo[]
     */
    public function getTrackingInfo()
    {
        return $this->values['trackingInfo'];
    }
}
