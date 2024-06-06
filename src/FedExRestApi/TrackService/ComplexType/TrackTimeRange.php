<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Field which holds a date/timestamp window.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $begins
 * @property string $ends

 */
class TrackTimeRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTimeRange';

    /**
     * Set begins
     *
     *
     * Example: 2021-10-01T08:00:00
     * @param string $begins
     * @return $this
     */
    public function setBegins($begins)
    {
        $this->values['begins'] = $begins;
        return $this;
    }

    /**
     * Get begins
     *
     * @return string
     */
    public function getBegins()
    {
        return $this->values['begins'];
    }

    /**
     * Set ends
     *
     *
     * Example: 2021-10-15T00:00:00-06:00
     * @param string $ends
     * @return $this
     */
    public function setEnds($ends)
    {
        $this->values['ends'] = $ends;
        return $this;
    }

    /**
     * Get ends
     *
     * @return string
     */
    public function getEnds()
    {
        return $this->values['ends'];
    }
}
