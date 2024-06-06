<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are Locale details.<br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $country
 * @property string $language

 */
class RateLocale extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateLocale';

    /**
     * Set country
     *
     * 
     * Example: 
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->values['country'] = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->values['country'];
    }

    /**
     * Set language
     *
     * 
     * Example: 
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->values['language'] = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->values['language'];
    }
}
