<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specific date and time.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $dayOfWeek
 * @property string $time
 * @property string $day

 */
class AvCommitDetail_dateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCommitDetail_dateDetail';

    /**
     * This is a day of week in a shorter day format<br>Example: MON, TUE
     *
     *
     * Example: THU
     * @param string $dayOfWeek
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->values['dayOfWeek'] = $dayOfWeek;
        return $this;
    }

    /**
     * Get dayOfWeek
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->values['dayOfWeek'];
    }

    /**
     * This is time in a day. <br> Format: [HH:MM:SS]<br>example: 09:30:00
     *
     *
     * Example: 09:30:00
     * @param string $time
     * @return $this
     */
    public function setTime($time)
    {
        $this->values['time'] = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->values['time'];
    }

    /**
     * This is the day in format [MM-DD-YYYY]<br>example: Apr-13-2021
     *
     *
     * Example: Apr-13-2021
     * @param string $day
     * @return $this
     */
    public function setDay($day)
    {
        $this->values['day'] = $day;
        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->values['day'];
    }
}
