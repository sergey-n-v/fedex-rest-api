<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

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
class RateParsedPersonName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateParsedPersonName';

    /**
     * Set firstName
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
     * Set lastName
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
     * Set middleName
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
     * Set suffix
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
