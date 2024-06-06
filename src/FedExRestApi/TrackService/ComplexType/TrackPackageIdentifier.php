<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The type and value of the package identifier that is to be used to retrieve the tracking information for a package or group of packages.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $value
 * @property string $trackingNumberUniqueId

 */
class TrackPackageIdentifier extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackPackageIdentifier';

    /**
     * Set type
     *
     * simpleClass: TrackType
     * Example: SHIPPER_REFERENCE
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
     * Set value
     *
     *
     * Example: ASJFGVAS
     * @param string $value
     * @return $this
     */
    public function setValue(array $value)
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

    /**
     * Set trackingNumberUniqueId
     *
     *
     * Example: 245822~123456789012~FDEG
     * @param string $trackingNumberUniqueId
     * @return $this
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->values['trackingNumberUniqueId'] = $trackingNumberUniqueId;
        return $this;
    }

    /**
     * Get trackingNumberUniqueId
     *
     * @return string
     */
    public function getTrackingNumberUniqueId()
    {
        return $this->values['trackingNumberUniqueId'];
    }
}
