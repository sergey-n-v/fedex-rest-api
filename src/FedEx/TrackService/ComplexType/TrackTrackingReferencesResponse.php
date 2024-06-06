<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the response elements for Track by alternate reference request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackCXSError[] $cxsErrors
 * @property TrackCompleteTrackResult[] $completeTrackResults
 * @property TrackAlert[] $alerts
 * @property boolean $successful

 */
class TrackTrackingReferencesResponse extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingReferencesResponse';

    /**
     * Set cxsErrors
     *
     * 
     * Example: 
     * @param TrackCXSError[] $cxsErrors
     * @return $this
     */
    public function setCxsErrors(array $cxsErrors)
    {
        $this->values['cxsErrors'] = $cxsErrors;
        return $this;
    }

    /**
     * Get cxsErrors
     *
     * @return TrackCXSError[]
     */
    public function getCxsErrors()
    {
        return $this->values['cxsErrors'];
    }

    /**
     * Set completeTrackResults
     *
     * 
     * Example: 
     * @param TrackCompleteTrackResult[] $completeTrackResults
     * @return $this
     */
    public function setCompleteTrackResults(array $completeTrackResults)
    {
        $this->values['completeTrackResults'] = $completeTrackResults;
        return $this;
    }

    /**
     * Get completeTrackResults
     *
     * @return TrackCompleteTrackResult[]
     */
    public function getCompleteTrackResults()
    {
        return $this->values['completeTrackResults'];
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

    /**
     * Set successful
     *
     * 
     * Example: 
     * @param boolean $successful
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->values['successful'] = $successful;
        return $this;
    }

    /**
     * Get successful
     *
     * @return boolean
     */
    public function getSuccessful()
    {
        return $this->values['successful'];
    }
}
