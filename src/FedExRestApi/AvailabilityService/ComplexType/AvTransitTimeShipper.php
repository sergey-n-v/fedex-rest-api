<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Descriptive data on physical location. May be used as an actual physical address (place where one could go), or as a container of address parts, which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $city
 * @property string $stateOrProvinceCode
 * @property string $postalCode
 * @property string $countryCode
 * @property boolean $residential

 */
class AvTransitTimeShipper extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeShipper';

    /**
     * The name of city, town, etc. <br>Example: Beverly Hills
     *
     *
     * Example: Collierville
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
     * Identifying abbreviation for US state, canada Province. Format and presence of this field will vary, depending on the country. State code is required for US, CA, PR and not required for other countries. Conditional. Not used for Ground/SmartPost. Max length is 2.<br> Example: TN
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
     * Identification of a region for mail/package delivery. Format and presence of this field will vary, depending on the country. Optional for non postal-aware countries. Maximum length is 10. <br>Example: 38127
     *
     *
     * Example: 38127
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
     * The two-letter code used to identify a country. Max length is two.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * Indicates whether this address is residential (as opposed to commercial).<br>Example: false
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
}
