<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Information about why a shipment delivery is delayed and at what level
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $date
 * @property string $dayOfWeek
 * @property string $level
 * @property string $point
 * @property string $type
 * @property string $description

 */
class RateDelayDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateDelayDetail';

    /**
     * Set date
     *
     *
     * Example: 2023-11-25
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
     * Set level
     *
     *
     * Example: Country
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->values['level'] = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->values['level'];
    }

    /**
     * Set point
     *
     *
     * Example: Origin
     * @param string $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->values['point'] = $point;
        return $this;
    }

    /**
     * Get point
     *
     * @return string
     */
    public function getPoint()
    {
        return $this->values['point'];
    }

    /**
     * Set type
     *
     *
     * Example: holiday
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
     * Set description
     *
     *
     * Example: Christmas
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
