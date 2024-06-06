<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $streetLines
 * @property string $city
 * @property string $stateOrProvinceCode
 * @property  $postalCode
 * @property  $countryCode
 * @property boolean $residential

 */
class AvAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvAddress';

    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway"\, \"Suite 302"\]
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
     * This is a placeholder for City Name. <br> Example: Beverly Hills
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
     * This is a placeholder for State or Province code. <br> Example: CA<br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
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
     * This is the Postal code. This is Optional for non postal-aware countries. Max length is 10.<br> Example: 65247<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     *
     * Example: 38127
     * @param  $postalCode
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
     * @return
     */
    public function getPostalCode()
    {
        return $this->values['postalCode'];
    }

    /**
     * This is a Two-letter country code.Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
     *
     *
     * Example: US
     * @param  $countryCode
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
     * @return
     */
    public function getCountryCode()
    {
        return $this->values['countryCode'];
    }

    /**
     * Indicate whether this address is Residential as opposed to Commercial.
     *
     * simpleClass: AvResidential
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
