<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements for Tracking by TCN request type.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackTCNInfo $tcnInfo
 * @property boolean $includeDetailedScans

 */
class TrackFull_Schema_TCN extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_TCN';

    /**
     * Set tcnInfo
     *
     *
     * Example:
     * @param TrackTCNInfo $tcnInfo
     * @return $this
     */
    public function setTcnInfo(TrackTCNInfo $tcnInfo)
    {
        $this->values['tcnInfo'] = $tcnInfo;
        return $this;
    }

    /**
     * Get tcnInfo
     *
     * @return TrackTCNInfo
     */
    public function getTcnInfo()
    {
        return $this->values['tcnInfo'];
    }

    /**
     * Set includeDetailedScans
     *
     *
     * Example: 1
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
}
