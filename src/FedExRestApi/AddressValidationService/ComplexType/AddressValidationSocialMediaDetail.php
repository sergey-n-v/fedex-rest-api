<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * SocialMediaDetail Model
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $attributes
 * @property string $platformId

 */
class AddressValidationSocialMediaDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationSocialMediaDetail';

    /**
     * Specifies additional attributes about this contact.
     *
     *
     * Example: None
     * @param string $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->values['attributes'] = $attributes;
        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->values['attributes'];
    }

    /**
     * Specifies Platform Id
     *
     *
     * Example: GFDE/55
     * @param string $platformId
     * @return $this
     */
    public function setPlatformId($platformId)
    {
        $this->values['platformId'] = $platformId;
        return $this;
    }

    /**
     * Get platformId
     *
     * @return string
     */
    public function getPlatformId()
    {
        return $this->values['platformId'];
    }
}
