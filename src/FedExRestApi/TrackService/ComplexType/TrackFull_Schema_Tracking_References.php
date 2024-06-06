<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the request elements for Track by alternate reference.<br> For a valid request there are two combinations:<br> 1.) A referenceValue and accountNumber is required OR <br>2.) referenceType & carrierCode, shipdateBegin and shipDateEnd, destinationPostalCode and destinationCountryCode are required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackReferenceInformation $referencesInformation
 * @property boolean $includeDetailedScans

 */
class TrackFull_Schema_Tracking_References extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_Tracking_References';

    /**
     * Set referencesInformation
     *
     *
     * Example:
     * @param TrackReferenceInformation $referencesInformation
     * @return $this
     */
    public function setReferencesInformation(TrackReferenceInformation $referencesInformation)
    {
        $this->values['referencesInformation'] = $referencesInformation;
        return $this;
    }

    /**
     * Get referencesInformation
     *
     * @return TrackReferenceInformation
     */
    public function getReferencesInformation()
    {
        return $this->values['referencesInformation'];
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
