<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Email addresses along with locale to which the pickup confirmation email must be sent.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $address
 * @property string $locale

 */
class PickupEmailDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupEmailDetail';

    /**
     * Specify the email address.<br>Example: sample@gmail.com
     *
     * 
     * Example: sample@gmail.com
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->values['address'] = $address;
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->values['address'];
    }

    /**
     * Specify the language in which the email needs to be sent.Default value is en_US.<br>Example: en_US. .<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
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
