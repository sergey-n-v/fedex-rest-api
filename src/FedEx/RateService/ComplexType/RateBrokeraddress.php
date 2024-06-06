<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the broker address used for this shipment.
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
 * @property string $classification
 * @property string $geographicCoordinates
 * @property string $urbanizationCode
 * @property string $countryName

 */
class RateBrokeraddress extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateBrokeraddress';

    /**
     * Set streetLines
     *
     * 
     * Example: ["10 FedEx Parkway","Suite 302"]
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

    /**
     * Set classification
     *
     * 
     * Example: residential
     * @param string $classification
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->values['classification'] = $classification;
        return $this;
    }

    /**
     * Get classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->values['classification'];
    }

    /**
     * Set geographicCoordinates
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

    /**
     * Set urbanizationCode
     *
     * 
     * Example: code
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
     * Set countryName
     *
     * 
     * Example: India
     * @param string $countryName
     * @return $this
     */
    public function setCountryName($countryName)
    {
        $this->values['countryName'] = $countryName;
        return $this;
    }

    /**
     * Get countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->values['countryName'];
    }
}
