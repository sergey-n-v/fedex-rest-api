<?php
namespace FedExRestApi\AuthorizationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AuthParameter
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value
 * @property string $key

 */
class AuthParameter extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthParameter';

    /**
     * Indicates the error option to be applied.
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->values['value'] = $value;
        return $this;
    }

    /**
     * Indicates the error option to be applied.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->values['value'];
    }

    /**
     * Indicates the value associated with the key.
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->values['key'] = $key;
        return $this;
    }

    /**
     * Indicates the value associated with the key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->values['key'];
    }
}
