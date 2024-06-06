<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This is the internal FedEx-system recognized address and location details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceArea
 * @property string $countryCode
 * @property string $locationId
 * @property string $airportId
 * @property string $postalCode
 * @property string $stateOrProvinceCode
 * @property int $locationNumber

 */
class AvCleansedAddressandLocationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCleansedAddressandLocationDetail';

    /**
     * This is the FedEx recognized service area code.
     *
     * 
     * Example: 100015
     * @param string $serviceArea
     * @return $this
     */
    public function setServiceArea($serviceArea)
    {
        $this->values['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
     * Get serviceArea
     *
     * @return string
     */
    public function getServiceArea()
    {
        return $this->values['serviceArea'];
    }

    /**
     * This represents the FedEx-system recognized country code.<br>Example: US<br><a onclick='loadDocReference("countrycodes")'>Click here to see Country Codes</a>
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
     * This is the unique FedEx location identifier.
     *
     * 
     * Example: 631278456
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
     * This is a FedEx unique identifier for the Airport.
     *
     * 
     * Example: CA4562
     * @param string $airportId
     * @return $this
     */
    public function setAirportId($airportId)
    {
        $this->values['airportId'] = $airportId;
        return $this;
    }

    /**
     * Get airportId
     *
     * @return string
     */
    public function getAirportId()
    {
        return $this->values['airportId'];
    }

    /**
     * This represents the FedEx-system recognized postal code.
     *
     * 
     * Example: 685423
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
     * This represents the FedEx-system recognized state or province code.
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
     * The op-co specific numeric identifier for a FedEx location.
     *
     * 
     * Example: 7856
     * @param int $locationNumber
     * @return $this
     */
    public function setLocationNumber($locationNumber)
    {
        $this->values['locationNumber'] = $locationNumber;
        return $this;
    }

    /**
     * Get locationNumber
     *
     * @return int
     */
    public function getLocationNumber()
    {
        return $this->values['locationNumber'];
    }
}
