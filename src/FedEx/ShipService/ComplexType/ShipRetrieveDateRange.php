<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Date Range for custom delivery request; only used if type is BETWEEN.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $begins
 * @property string $ends

 */
class ShipRetrieveDateRange extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRetrieveDateRange';

    /**
     * Set begins
     *
     * 
     * Example: 22-01-2020
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
     * Example: 2-01-2020
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
