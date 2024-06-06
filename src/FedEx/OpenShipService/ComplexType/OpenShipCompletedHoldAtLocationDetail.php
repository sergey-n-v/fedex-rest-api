<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is default holding location information when HOLD_AT_LOCATION special service is requested and the client does not specify the hold location address.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $holdingLocationType
 * @property OpenShipJustContactAndAddress $holdingLocation

 */
class OpenShipCompletedHoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedHoldAtLocationDetail';

    /**
     * Indicates the type of the FedEx holding location <br>Example: FEDEX_STAFFED
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
     * Indicate the physical address of the FedEx holding location.
     *
     * 
     * Example: 
     * @param OpenShipJustContactAndAddress $holdingLocation
     * @return $this
     */
    public function setHoldingLocation($holdingLocation)
    {
        $this->values['holdingLocation'] = $holdingLocation;
        return $this;
    }

    /**
     * Get holdingLocation
     *
     * @return OpenShipJustContactAndAddress
     */
    public function getHoldingLocation()
    {
        return $this->values['holdingLocation'];
    }
}
