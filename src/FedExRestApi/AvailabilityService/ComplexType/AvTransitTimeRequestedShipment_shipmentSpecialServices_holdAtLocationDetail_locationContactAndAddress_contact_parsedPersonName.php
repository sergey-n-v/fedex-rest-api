<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This object is used to separate the person name into first and last name.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $middleName
 * @property string $suffix

 */
class AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact_parsedPersonName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedShipment_shipmentSpecialServices_holdAtLocationDetail_locationContactAndAddress_contact_parsedPersonName';

    /**
     * Specify the First Name. Maximum Length is 35. <br> Example: John
     *
     *
     * Example: firstName
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->values['firstName'] = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->values['firstName'];
    }

    /**
     * Specify the Last Name. Maximum Length is 35. <br> Example: Mayor
     *
     *
     * Example: lastName
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->values['lastName'] = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->values['lastName'];
    }

    /**
     * Specify the Middle Name.<br> Example: Redmond
     *
     *
     * Example: middleName
     * @param string $middleName
     * @return $this
     */
    public function setMiddleName($middleName)
    {
        $this->values['middleName'] = $middleName;
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->values['middleName'];
    }

    /**
     * Specify the Suffix.<br> Example: Jr
     *
     *
     * Example: suffix
     * @param string $suffix
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->values['suffix'] = $suffix;
        return $this;
    }

    /**
     * Get suffix
     *
     * @return string
     */
    public function getSuffix()
    {
        return $this->values['suffix'];
    }
}
