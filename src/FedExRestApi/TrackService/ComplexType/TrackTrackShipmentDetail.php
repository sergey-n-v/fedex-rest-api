<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Shipment level details for the shipment being tracked. Includes overall shipment weight, contents etc.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackShipmentContent[] $contents
 * @property boolean $beforePossessionStatus
 * @property TrackWeight[] $weight
 * @property string $contentPieceCount
 * @property TrackTrackSplitShipment[] $splitShipments

 */
class TrackTrackShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackShipmentDetail';

    /**
     * Set contents
     *
     *
     * Example:
     * @param TrackShipmentContent[] $contents
     * @return $this
     */
    public function setContents(array $contents)
    {
        $this->values['contents'] = $contents;
        return $this;
    }

    /**
     * Get contents
     *
     * @return TrackShipmentContent[]
     */
    public function getContents()
    {
        return $this->values['contents'];
    }

    /**
     * Set beforePossessionStatus
     *
     *
     *
     * @param boolean $beforePossessionStatus
     * @return $this
     */
    public function setBeforePossessionStatus($beforePossessionStatus)
    {
        $this->values['beforePossessionStatus'] = $beforePossessionStatus;
        return $this;
    }

    /**
     * Get beforePossessionStatus
     *
     * @return boolean
     */
    public function getBeforePossessionStatus()
    {
        return $this->values['beforePossessionStatus'];
    }

    /**
     * Set weight
     *
     *
     * Example:
     * @param TrackWeight[] $weight
     * @return $this
     */
    public function setWeight(array $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return TrackWeight[]
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set contentPieceCount
     *
     *
     * Example: 3333
     * @param string $contentPieceCount
     * @return $this
     */
    public function setContentPieceCount($contentPieceCount)
    {
        $this->values['contentPieceCount'] = $contentPieceCount;
        return $this;
    }

    /**
     * Get contentPieceCount
     *
     * @return string
     */
    public function getContentPieceCount()
    {
        return $this->values['contentPieceCount'];
    }

    /**
     * Set splitShipments
     *
     *
     * Example:
     * @param TrackTrackSplitShipment[] $splitShipments
     * @return $this
     */
    public function setSplitShipments(array $splitShipments)
    {
        $this->values['splitShipments'] = $splitShipments;
        return $this;
    }

    /**
     * Get splitShipments
     *
     * @return TrackTrackSplitShipment[]
     */
    public function getSplitShipments()
    {
        return $this->values['splitShipments'];
    }
}
