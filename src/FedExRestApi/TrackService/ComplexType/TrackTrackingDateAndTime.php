<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Date and time information for the tracked shipment. Date and time information for the tracked shipment includes various type of date time including when the package was shipped, when it is expected to deliver, when it is actually delivered etc.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $dateTime
 * @property string $type

 */
class TrackTrackingDateAndTime extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingDateAndTime';

    /**
     * Set dateTime
     *
     *
     * Example: 2007-09-27T00:00:00
     * @param string $dateTime
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->values['dateTime'] = $dateTime;
        return $this;
    }

    /**
     * Get dateTime
     *
     * @return string
     */
    public function getDateTime()
    {
        return $this->values['dateTime'];
    }

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: ACTUAL_DELIVERY
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
}
