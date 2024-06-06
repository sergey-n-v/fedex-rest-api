<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Descriptive data for a physical location. May be used as an actual physical address (place to which one could go), or as a container of "address parts" which should be handled as a unit (such as a city-state-ZIP combination within the US).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $streetLines
 * @property string $urbanizationCode
 * @property string $city
 * @property string $stateOrProvinceCode
 * @property string $postalCode
 * @property string $countryCode
 * @property boolean $residential
 * @property string $addressClassification

 */
class PickupAddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupAddress';

    /**
     * This is a combination of number, street name, etc. <br>Note: At least one line is required and streetlines more than 3 will be ignored. Empty lines should not be included.<br>Example: [\"10 FedEx Parkway\", \"Suite 302\"]
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
     * Optional<br> In Puerto Rico, identical street names and address number ranges can be found within the same ZIP Code. In these cases, the urbanization name is the only element that correctly identifies the location of a particular address.<br> Example: URB FAIR OAKS
     *
     *
     * Example: URB FAIR OAKS
     * @param string $urbanizationCode
     * @return $this
     */
    public function setUrbanizationCode($urbanizationCode)
    {
        $this->values['urbanizationCode'] = $urbanizationCode;
        return $this;
    }

    /**
     * Get urbanizationCode
     *
     * @return string
     */
    public function getUrbanizationCode()
    {
        return $this->values['urbanizationCode'];
    }

    /**
     * This is a placeholder for City Name. <br>Note: This is conditional and not required in all the shipping requests. <br> Example: Beverly Hills
     *
     *
     * Example: Memphis
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
     * This is a placeholder for State or Province code.Maximum length is 2. Maximum length is 2<br> Example: CA <br><a onclick='loadDocReference("canadaprovincecodes")'>Click here to see State/Province Code</a>
     *
     *
     * Example: TN
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
     * This is a placeholder for postal code.<br>Note: The postal code is required for postal-aware countries. <br> Example: 38127<br><a onclick='loadDocReference("postalawarecountries")'>Click here to see Postal aware countries</a>
     *
     *
     * Example: 38017
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
     * This is the two-letter country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicate whether this address is Residential as opposed to Commercial.
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
     * Classifies a given address as either of unknown, residential, mixed or business.
     *
     * simpleClass: PickupAddressClassification
     * Example: MIXED
     * @param string $addressClassification
     * @return $this
     */
    public function setAddressClassification($addressClassification)
    {
        $this->values['addressClassification'] = $addressClassification;
        return $this;
    }

    /**
     * Get addressClassification
     *
     * @return string
     */
    public function getAddressClassification()
    {
        return $this->values['addressClassification'];
    }
}
