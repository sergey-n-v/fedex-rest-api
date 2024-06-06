<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The available tracking documents for the shipment being tracked. Available tracking documents includes SPOD and Bill of lading.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $size
 * @property string $type

 */
class TrackAvailableImagesDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackAvailableImagesDetail';

    /**
     * Set size
     *
     * simpleClass: TrackSize
     * Example: LARGE
     * @param string $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->values['size'] = $size;
        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->values['size'];
    }

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: BILL_OF_LADING
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
