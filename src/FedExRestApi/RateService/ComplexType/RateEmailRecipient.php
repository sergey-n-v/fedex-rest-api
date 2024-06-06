<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify the recipient email information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $emailAddress
 * @property RateEmailOptionsRequested $optionsRequested
 * @property string $role
 * @property RateLocale $locale

 */
class RateEmailRecipient extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEmailRecipient';

    /**
     * Set emailAddress
     *
     *
     * Example:
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
     * @param RateEmailOptionsRequested $optionsRequested
     * @return $this
     */
    public function setOptionsRequested(RateEmailOptionsRequested $optionsRequested)
    {
        $this->values['optionsRequested'] = $optionsRequested;
        return $this;
    }

    /**
     * Get optionsRequested
     *
     * @return RateEmailOptionsRequested
     */
    public function getOptionsRequested()
    {
        return $this->values['optionsRequested'];
    }

    /**
     * Set role
     *
     * simpleClass: RateRole
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
     * Example:
     * @param RateLocale $locale
     * @return $this
     */
    public function setLocale(RateLocale $locale)
    {
        $this->values['locale'] = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return RateLocale
     */
    public function getLocale()
    {
        return $this->values['locale'];
    }
}
