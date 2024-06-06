<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AddressValidationParsedPersonName
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $firstName
 * @property string $middleName
 * @property string $lastName
 * @property string $suffix

 */
class AddressValidationParsedPersonName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationParsedPersonName';

    /**
     * First Name <br>Example: Edwin
     *
     *
     * Example: Edwin
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
     * Middle Name <br>Example: Thomas
     *
     *
     * Example: Thomas
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
     * Last Name <br>Example: Luies
     *
     *
     * Example: Luies
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
     * Suffix <br>Example: Jr
     *
     *
     * Example: Jr
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
