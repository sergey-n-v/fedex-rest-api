<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are date and time details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $dayOfWeek
 * @property string $dayFormat

 */
class RateDateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDateDetail';

    /**
     * Set dayOfWeek
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
     * Set dayFormat
     *
     * 
     * Example: 2020-07-16T10:30:00
     * @param string $dayFormat
     * @return $this
     */
    public function setDayFormat($dayFormat)
    {
        $this->values['dayFormat'] = $dayFormat;
        return $this;
    }

    /**
     * Get dayFormat
     *
     * @return string
     */
    public function getDayFormat()
    {
        return $this->values['dayFormat'];
    }
}
