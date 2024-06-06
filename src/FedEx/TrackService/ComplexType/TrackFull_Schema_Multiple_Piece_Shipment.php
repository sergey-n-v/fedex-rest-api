<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request elements for Tracking by associated shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $includeDetailedScans
 * @property TrackMasterTrackingInfo $masterTrackingNumberInfo
 * @property string $associatedType
 * @property TrackPagingDetails $pagingDetails

 */
class TrackFull_Schema_Multiple_Piece_Shipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackFull_Schema_Multiple_Piece_Shipment';

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

    /**
     * Set masterTrackingNumberInfo
     *
     * 
     * Example: 
     * @param TrackMasterTrackingInfo $masterTrackingNumberInfo
     * @return $this
     */
    public function setMasterTrackingNumberInfo(TrackMasterTrackingInfo $masterTrackingNumberInfo)
    {
        $this->values['masterTrackingNumberInfo'] = $masterTrackingNumberInfo;
        return $this;
    }

    /**
     * Get masterTrackingNumberInfo
     *
     * @return TrackMasterTrackingInfo
     */
    public function getMasterTrackingNumberInfo()
    {
        return $this->values['masterTrackingNumberInfo'];
    }

    /**
     * Set associatedType
     *
     * simpleClass: TrackAssociatedType
     * Example: STANDARD_MPS
     * @param string $associatedType
     * @return $this
     */
    public function setAssociatedType($associatedType)
    {
        $this->values['associatedType'] = $associatedType;
        return $this;
    }

    /**
     * Get associatedType
     *
     * @return string
     */
    public function getAssociatedType()
    {
        return $this->values['associatedType'];
    }

    /**
     * Set pagingDetails
     *
     * 
     * Example: 
     * @param TrackPagingDetails $pagingDetails
     * @return $this
     */
    public function setPagingDetails(TrackPagingDetails $pagingDetails)
    {
        $this->values['pagingDetails'] = $pagingDetails;
        return $this;
    }

    /**
     * Get pagingDetails
     *
     * @return TrackPagingDetails
     */
    public function getPagingDetails()
    {
        return $this->values['pagingDetails'];
    }
}
