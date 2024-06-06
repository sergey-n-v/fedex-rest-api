<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify required information for a shipment to be held at destination FedEx location. <br><br><i>Note: This object HoldAtLocationDetail is Required, when HOLD_AT_LOCATION is chosen in the specialServiceTypes.</i>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationId
 * @property OpenShipContactAndAddress $locationContactAndAddress
 * @property string $locationType

 */
class OpenShipHoldAtLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHoldAtLocationDetail';

    /**
     * This is an alphanumeric identifier used for Location/Facility Identification.<br><br>Example: YBZA<br><br>Note: <ul><li>For HAL Shipment, Location ID is <b>REQUIRED</b> to ensure packages are delivered to the right location.</li><li>Use endpoint [<b>Find Location</b>] in [<b>Location Search API</b>], to find the correct location ID for your shipment.</li></ul>
     *
     *
     * Example: YBZA
     * @param string $locationId
     * @return $this
     */
    public function setLocationId($locationId)
    {
        $this->values['locationId'] = $locationId;
        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->values['locationId'];
    }

    /**
     * Set locationContactAndAddress
     *
     *
     * Example:
     * @param OpenShipContactAndAddress $locationContactAndAddress
     * @return $this
     */
    public function setLocationContactAndAddress(OpenShipContactAndAddress $locationContactAndAddress)
    {
        $this->values['locationContactAndAddress'] = $locationContactAndAddress;
        return $this;
    }

    /**
     * Get locationContactAndAddress
     *
     * @return OpenShipContactAndAddress
     */
    public function getLocationContactAndAddress()
    {
        return $this->values['locationContactAndAddress'];
    }

    /**
     * Specifies the type of facility at which package/shipment is to be held.
     *
     * simpleClass: OpenShipLocationType
     * Example: FEDEX_ONSITE
     * @param string $locationType
     * @return $this
     */
    public function setLocationType($locationType)
    {
        $this->values['locationType'] = $locationType;
        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->values['locationType'];
    }
}
