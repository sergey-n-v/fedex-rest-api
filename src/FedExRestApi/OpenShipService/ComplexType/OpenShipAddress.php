<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $streetLines
 * @property string $city
 * @property string $stateOrProvinceCode
 * @property string $postalCode
 * @property string $countryCode
 * @property boolean $residential

 */
class OpenShipAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipAddress';

    /**
     * This is the combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included. Maximum length per line is 35.<br>Example: [10 FedEx Parkway, Suite 302, .etc.]
     *
     *
     * Example:
     * @param string $streetLines
     * @return $this
     */
    public function setStreetLines(array $streetLines)
    {
        $this->values['streetLines'] = $streetLines;
        return $this;
    }

    /**
     * Get streetLines
     *
     * @return string
     */
    public function getStreetLines()
    {
        return $this->values['streetLines'];
    }

    /**
     * This is a placeholder for City Name.<br><br>Note: This is conditional and not required in all the requests. <br><br>Note: It is recommended for Express shipments for the most accurate ODA and OPA surcharges.<br><br>Example: Beverly Hills
     *
     *
     * Example:
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->values['city'] = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->values['city'];
    }

    /**
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     *
     * Example:
     * @param string $stateOrProvinceCode
     * @return $this
     */
    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->values['stateOrProvinceCode'] = $stateOrProvinceCode;
        return $this;
    }

    /**
     * Get stateOrProvinceCode
     *
     * @return string
     */
    public function getStateOrProvinceCode()
    {
        return $this->values['stateOrProvinceCode'];
    }

    /**
     * Indicate the Postal code. This is Optional for non postal-aware countries. Maximum length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     *
     * Example:
     * @param string $postalCode
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->values['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->values['postalCode'];
    }

    /**
     * This is the two-letter country code.<br><br>Maximum length is 2.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>click here to see Country codes</a>
     *
     *
     * Example:
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->values['countryCode'] = $countryCode;
        return $this;
    }

    /**
     * Get countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->values['countryCode'];
    }

    /**
     * Indicate whether this address is residential (as opposed to commercial).
     *
     *
     * Example:
     * @param boolean $residential
     * @return $this
     */
    public function setResidential($residential)
    {
        $this->values['residential'] = $residential;
        return $this;
    }

    /**
     * Get residential
     *
     * @return boolean
     */
    public function getResidential()
    {
        return $this->values['residential'];
    }
}
