<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PickupPickupLocationParty_contact
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $companyName
 * @property string $personName
 * @property string $phoneNumber

 */
class PickupPickupLocationParty_contact extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupLocationParty_contact';

    /**
     * Set companyName
     *
     *
     * Example: Fedex
     * @param string $companyName
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->values['companyName'] = $companyName;
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->values['companyName'];
    }

    /**
     * Set personName
     *
     *
     * Example: John Taylor
     * @param string $personName
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->values['personName'] = $personName;
        return $this;
    }

    /**
     * Get personName
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->values['personName'];
    }

    /**
     * Set phoneNumber
     *
     *
     * Example: 7194446666
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }
}
