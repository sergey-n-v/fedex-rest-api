<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackTimeWindow
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property TrackTimeRange $window
 * @property string $type

 */
class TrackTimeWindow extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTimeWindow';

    /**
     * Set description
     *
     * 
     * Example: Description field
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

    /**
     * Set window
     *
     * 
     * Example: 
     * @param TrackTimeRange $window
     * @return $this
     */
    public function setWindow(TrackTimeRange $window)
    {
        $this->values['window'] = $window;
        return $this;
    }

    /**
     * Get window
     *
     * @return TrackTimeRange
     */
    public function getWindow()
    {
        return $this->values['window'];
    }

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: ESTIMATED_DELIVERY
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
