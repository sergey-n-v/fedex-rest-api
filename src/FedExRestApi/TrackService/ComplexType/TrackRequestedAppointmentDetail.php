<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Field which specifies the details of the requested appointment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $date
 * @property TrackTimeWindow[] $window

 */
class TrackRequestedAppointmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackRequestedAppointmentDetail';

    /**
     * Set date
     *
     *
     * Example: 2019-05-07
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->values['date'] = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->values['date'];
    }

    /**
     * Set window
     *
     *
     * Example:
     * @param TrackTimeWindow[] $window
     * @return $this
     */
    public function setWindow(array $window)
    {
        $this->values['window'] = $window;
        return $this;
    }

    /**
     * Get window
     *
     * @return TrackTimeWindow[]
     */
    public function getWindow()
    {
        return $this->values['window'];
    }
}
