<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are the recipient details for the online email return label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property ShipEmailOptionsRequested $optionsRequested
 * @property string $role
 * @property string $locale

 */
class ShipEmailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipEmailRecipient';

    /**
     * Set emailAddress
     *
     * 
     * Example: neena@fedex.com
     * @param string $emailAddress
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->values['emailAddress'] = $emailAddress;
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->values['emailAddress'];
    }

    /**
     * Set optionsRequested
     *
     * 
     * Example: 
     * @param ShipEmailOptionsRequested $optionsRequested
     * @return $this
     */
    public function setOptionsRequested(ShipEmailOptionsRequested $optionsRequested)
    {
        $this->values['optionsRequested'] = $optionsRequested;
        return $this;
    }

    /**
     * Get optionsRequested
     *
     * @return ShipEmailOptionsRequested
     */
    public function getOptionsRequested()
    {
        return $this->values['optionsRequested'];
    }

    /**
     * Set role
     *
     * simpleClass: ShipRole
     * Example: 
     * @param string $role
     * @return $this
     */
    public function setRole($role)
    {
        $this->values['role'] = $role;
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->values['role'];
    }

    /**
     * Set locale
     *
     * 
     * Example: en_US
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->values['locale'] = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->values['locale'];
    }
}
