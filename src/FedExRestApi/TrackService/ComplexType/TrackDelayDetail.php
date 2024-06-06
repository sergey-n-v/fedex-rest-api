<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the information about delays.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $subType
 * @property string $status

 */
class TrackDelayDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackDelayDetail';

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: WEATHER
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set subType
     *
     * simpleClass: TrackSubType
     * Example: SNOW
     * @param string $subType
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->values['subType'] = $subType;
        return $this;
    }

    /**
     * Get subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->values['subType'];
    }

    /**
     * Set status
     *
     * simpleClass: TrackStatus
     * Example: DELAYED
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->values['status'] = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->values['status'];
    }
}
