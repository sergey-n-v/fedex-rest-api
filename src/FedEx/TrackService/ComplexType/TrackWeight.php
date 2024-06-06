<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are the package weight details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $unit
 * @property string $value

 */
class TrackWeight extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackWeight';

    /**
     * Set unit
     *
     * simpleClass: TrackUnit
     * Example: LB
     * @param string $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->values['unit'] = $unit;
        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->values['unit'];
    }

    /**
     * Set value
     *
     * 
     * Example: 22222.0
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
