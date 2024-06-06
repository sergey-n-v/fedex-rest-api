<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $holdingLocationType
 * @property ShipJustContactAndAddress $holdingLocation

 */
class ShipCompletedHoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedHoldAtLocationDetail';

    /**
     * Set holdingLocationType
     *
     * 
     * Example: FEDEX_STAFFED
     * @param string $holdingLocationType
     * @return $this
     */
    public function setHoldingLocationType($holdingLocationType)
    {
        $this->values['holdingLocationType'] = $holdingLocationType;
        return $this;
    }

    /**
     * Get holdingLocationType
     *
     * @return string
     */
    public function getHoldingLocationType()
    {
        return $this->values['holdingLocationType'];
    }

    /**
     * Set holdingLocation
     *
     * 
     * Example: 
     * @param ShipJustContactAndAddress $holdingLocation
     * @return $this
     */
    public function setHoldingLocation(ShipJustContactAndAddress $holdingLocation)
    {
        $this->values['holdingLocation'] = $holdingLocation;
        return $this;
    }

    /**
     * Get holdingLocation
     *
     * @return ShipJustContactAndAddress
     */
    public function getHoldingLocation()
    {
        return $this->values['holdingLocation'];
    }
}
