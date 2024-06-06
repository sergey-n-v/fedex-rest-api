<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the count of the packages delivered and the count of the packages at the origin which can be used for verification purposes. Populated for secure users only.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $count
 * @property string $description
 * @property string $type

 */
class TrackPieceCountDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackPieceCountDetail';

    /**
     * Set count
     *
     *
     * Example: 35
     * @param string $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->values['count'] = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return string
     */
    public function getCount()
    {
        return $this->values['count'];
    }

    /**
     * Set description
     *
     *
     * Example: picec count description
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
     * Set type
     *
     * simpleClass: TrackType
     * Example: ORIGIN
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
