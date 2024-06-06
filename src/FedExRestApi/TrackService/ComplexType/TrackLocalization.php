<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the language details for email notification.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $languageCode
 * @property string $localeCode

 */
class TrackLocalization extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackLocalization';

    /**
     * Set languageCode
     *
     *
     * Example: en
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->values['languageCode'] = $languageCode;
        return $this;
    }

    /**
     * Get languageCode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->values['languageCode'];
    }

    /**
     * Set localeCode
     *
     *
     * Example: US
     * @param string $localeCode
     * @return $this
     */
    public function setLocaleCode($localeCode)
    {
        $this->values['localeCode'] = $localeCode;
        return $this;
    }

    /**
     * Get localeCode
     *
     * @return string
     */
    public function getLocaleCode()
    {
        return $this->values['localeCode'];
    }
}
