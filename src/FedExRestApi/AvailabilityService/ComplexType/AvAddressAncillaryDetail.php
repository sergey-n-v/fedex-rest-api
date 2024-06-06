<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * specifies additional address details for the physical location
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $locationInCity
 * @property string $suite
 * @property string $addressVerificationOverrideReason
 * @property string $locationInProperty
 * @property string $addtionalDescriptions
 * @property string $department
 * @property string $roomFloor
 * @property string $crossStreet
 * @property string $building
 * @property string $apartment
 * @property string $room

 */
class AvAddressAncillaryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvAddressAncillaryDetail';

    /**
     * This is the Subdivision or community within a city for the given address.<br> Forester subdivision
     *
     *
     * Example:
     * @param string $locationInCity
     * @return $this
     */
    public function setLocationInCity($locationInCity)
    {
        $this->values['locationInCity'] = $locationInCity;
        return $this;
    }

    /**
     * Get locationInCity
     *
     * @return string
     */
    public function getLocationInCity()
    {
        return $this->values['locationInCity'];
    }

    /**
     * This is the suite information for the given address.
     *
     *
     * Example:
     * @param string $suite
     * @return $this
     */
    public function setSuite($suite)
    {
        $this->values['suite'] = $suite;
        return $this;
    }

    /**
     * Get suite
     *
     * @return string
     */
    public function getSuite()
    {
        return $this->values['suite'];
    }

    /**
     * Specifies the reason to override address verification.<br> Valid values:  CUSTOMER_PREFERENCE, CUSTOMER_PROVIDED_PROOF, MANUAL_VALIDATION
     *
     *
     * Example:
     * @param string $addressVerificationOverrideReason
     * @return $this
     */
    public function setAddressVerificationOverrideReason($addressVerificationOverrideReason)
    {
        $this->values['addressVerificationOverrideReason'] = $addressVerificationOverrideReason;
        return $this;
    }

    /**
     * Get addressVerificationOverrideReason
     *
     * @return string
     */
    public function getAddressVerificationOverrideReason()
    {
        return $this->values['addressVerificationOverrideReason'];
    }

    /**
     * This is location in a campus, such as exterior building annex A.<br> Example: south west of main office entrance.
     *
     *
     * Example:
     * @param string $locationInProperty
     * @return $this
     */
    public function setLocationInProperty($locationInProperty)
    {
        $this->values['locationInProperty'] = $locationInProperty;
        return $this;
    }

    /**
     * Get locationInProperty
     *
     * @return string
     */
    public function getLocationInProperty()
    {
        return $this->values['locationInProperty'];
    }

    /**
     * Specifies any additional information about the given address.<br>Example: north door
     *
     *
     * Example:
     * @param string $addtionalDescriptions
     * @return $this
     */
    public function setAddtionalDescriptions($addtionalDescriptions)
    {
        $this->values['addtionalDescriptions'] = $addtionalDescriptions;
        return $this;
    }

    /**
     * Get addtionalDescriptions
     *
     * @return string
     */
    public function getAddtionalDescriptions()
    {
        return $this->values['addtionalDescriptions'];
    }

    /**
     * This is the department for the given address.<br>Example: Claims department
     *
     *
     * Example:
     * @param string $department
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->values['department'] = $department;
        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->values['department'];
    }

    /**
     * This is to specify the room or floor information for the given address.<br>Example: 5th floor
     *
     *
     * Example:
     * @param string $roomFloor
     * @return $this
     */
    public function setRoomFloor($roomFloor)
    {
        $this->values['roomFloor'] = $roomFloor;
        return $this;
    }

    /**
     * Get roomFloor
     *
     * @return string
     */
    public function getRoomFloor()
    {
        return $this->values['roomFloor'];
    }

    /**
     * This is the cross street information for the given address.<br>Example: Union and Main
     *
     *
     * Example:
     * @param string $crossStreet
     * @return $this
     */
    public function setCrossStreet($crossStreet)
    {
        $this->values['crossStreet'] = $crossStreet;
        return $this;
    }

    /**
     * Get crossStreet
     *
     * @return string
     */
    public function getCrossStreet()
    {
        return $this->values['crossStreet'];
    }

    /**
     * This is the building information for the given address.<br>Example: Building 300
     *
     *
     * Example:
     * @param string $building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->values['building'] = $building;
        return $this;
    }

    /**
     * Get building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->values['building'];
    }

    /**
     * This is the apartment information for the given address.<br>Example: Apartment 1503
     *
     *
     * Example:
     * @param string $apartment
     * @return $this
     */
    public function setApartment($apartment)
    {
        $this->values['apartment'] = $apartment;
        return $this;
    }

    /**
     * Get apartment
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->values['apartment'];
    }

    /**
     * This is room specific information for the given address.<br>Example: Room B-23
     *
     *
     * Example:
     * @param string $room
     * @return $this
     */
    public function setRoom($room)
    {
        $this->values['room'] = $room;
        return $this;
    }

    /**
     * Get room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->values['room'];
    }
}
