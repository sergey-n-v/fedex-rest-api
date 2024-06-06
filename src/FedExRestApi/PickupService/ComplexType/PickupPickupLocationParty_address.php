<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PickupPickupLocationParty_address
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

 */
class PickupPickupLocationParty_address extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupLocationParty_address';

    /**
     * Set streetLines
     *
     *
     * Example: ["123 Ship Street"]
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
     * Set stateOrProvinceCode
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
     * Set postalCode
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
}
