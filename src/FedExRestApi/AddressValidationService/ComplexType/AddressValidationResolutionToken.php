<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the resolved attribute with a token indicating if it was changed or not.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $changed
 * @property string $value

 */
class AddressValidationResolutionToken extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationResolutionToken';

    /**
     * Indicates if it has changed from the input address.
     *
     *
     *
     * @param boolean $changed
     * @return $this
     */
    public function setChanged($changed)
    {
        $this->values['changed'] = $changed;
        return $this;
    }

    /**
     * Get changed
     *
     * @return boolean
     */
    public function getChanged()
    {
        return $this->values['changed'];
    }

    /**
     * Indicates the changed value.<br> Example: SAN JUAN
     *
     *
     * Example: SAN JUAN
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }
}
