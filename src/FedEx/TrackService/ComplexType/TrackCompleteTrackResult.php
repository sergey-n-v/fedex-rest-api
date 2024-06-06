<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Detailed and complete track results
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $trackingNumber
 * @property TrackTrackResult[] $trackResults

 */
class TrackCompleteTrackResult extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackCompleteTrackResult';

    /**
     * Set trackingNumber
     *
     * 
     * Example: 123456789012
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }

    /**
     * Set trackResults
     *
     * 
     * Example: 
     * @param TrackTrackResult[] $trackResults
     * @return $this
     */
    public function setTrackResults(array $trackResults)
    {
        $this->values['trackResults'] = $trackResults;
        return $this;
    }

    /**
     * Get trackResults
     *
     * @return TrackTrackResult[]
     */
    public function getTrackResults()
    {
        return $this->values['trackResults'];
    }
}
