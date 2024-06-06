<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US).
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
 * @property string $geographicCoordinates

 */
class OpenShipPartyAddress_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPartyAddress_1';

    /**
     * This is the combination of number, street name, etc. Maximum length per line is 35.<br>Example: 10 FedEx Parkway, Suite 302.<p><i>Note:<ul><li>At least one line is required.</li><li>Streetlines more than 3 will be ignored.</li><li>Empty lines should not be included</li><li>For SmartPost Shipments, only 30 characters from the individual street lines will be printed on the labels.</li></ul></i></p>
     *
     * 
     * Example: ["1550 Union Blvd","Suite 302"]
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
     * This is a placeholder for City Name. <br><br>Example: Beverly Hills
     *
     * 
     * Example: Beverly Hills
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
     * This is a placeholder for State or Province code. State code is required for US, CA, PR and not required for other countries. Conditional. Max length is 2.<br><br>Example: CA.<br><a onclick='loadDocReference("canadaprovincecodes")'>click here to see State or Province Code</a>
     *
     * 
     * Example: CA
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
     * This is the Postal code.<br><br>This is Optional for non postal-aware countries.<br>Maximum length is 10.<br><br>Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>click here to see Postal aware countries</a>
     *
     * 
     * Example: 90210
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
     * Example: US
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
     * 
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

    /**
     * Indicates the geographic coordinates. <br> example: geographicCoordinates
     *
     * 
     * Example: geographicCoordinates
     * @param string $geographicCoordinates
     * @return $this
     */
    public function setGeographicCoordinates($geographicCoordinates)
    {
        $this->values['geographicCoordinates'] = $geographicCoordinates;
        return $this;
    }

    /**
     * Get geographicCoordinates
     *
     * @return string
     */
    public function getGeographicCoordinates()
    {
        return $this->values['geographicCoordinates'];
    }
}
