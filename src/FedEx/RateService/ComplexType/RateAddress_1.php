<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is detailed information on physical location. May be used as an actual physical address (place to which one could go), or as a container of address parts which should be handled as a unit (such as a city-state-ZIP combination within the US). Country code is required. Postal code is required for postal aware countries. State or province code is mandatory for Puerto Rico.
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
class RateAddress_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateAddress_1';

    /**
     * Set city
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
     * Set stateOrProvinceCode
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
     * Set postalCode
     *
     * 
     * Example: 65247
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
     * Set countryCode
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
     * Set residential
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
