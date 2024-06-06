<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Holds the information about split shipments.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pieceCount
 * @property string $statusDescription
 * @property string $timestamp
 * @property string $statusCode

 */
class TrackTrackSplitShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackSplitShipment';

    /**
     * Set pieceCount
     *
     *
     * Example: 10
     * @param string $pieceCount
     * @return $this
     */
    public function setPieceCount($pieceCount)
    {
        $this->values['pieceCount'] = $pieceCount;
        return $this;
    }

    /**
     * Get pieceCount
     *
     * @return string
     */
    public function getPieceCount()
    {
        return $this->values['pieceCount'];
    }

    /**
     * Set statusDescription
     *
     *
     * Example: status
     * @param string $statusDescription
     * @return $this
     */
    public function setStatusDescription($statusDescription)
    {
        $this->values['statusDescription'] = $statusDescription;
        return $this;
    }

    /**
     * Get statusDescription
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->values['statusDescription'];
    }

    /**
     * Set timestamp
     *
     *
     * Example: 2019-05-07T08:00:07
     * @param string $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->values['timestamp'] = $timestamp;
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->values['timestamp'];
    }

    /**
     * Set statusCode
     *
     *
     * Example: statuscode
     * @param string $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->values['statusCode'] = $statusCode;
        return $this;
    }

    /**
     * Get statusCode
     *
     * @return string
     */
    public function getStatusCode()
    {
        return $this->values['statusCode'];
    }
}
