<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * List of parameters which indicates the properties of the alert message.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $value
 * @property string $key

 */
class ShipParameter extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipParameter';

    /**
     * Set value
     *
     *
     * Example:
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

    /**
     * Set key
     *
     *
     * Example:
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->values['key'] = $key;
        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->values['key'];
    }
}
