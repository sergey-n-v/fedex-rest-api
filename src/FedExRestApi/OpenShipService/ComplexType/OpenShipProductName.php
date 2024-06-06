<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Product Name information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $encoding
 * @property string $value

 */
class OpenShipProductName extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipProductName';

    /**
     * The type of name (long, medium, short, etc.) to which this value refers.<br>Example: long
     *
     *
     * Example: long
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * The character encoding used to represent this product name. <br>Example: UTF-8
     *
     *
     * Example: UTF-8
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->values['encoding'] = $encoding;
        return $this;
    }

    /**
     * Get encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->values['encoding'];
    }

    /**
     * Specifies the value of the Product.<br>Example: F-2
     *
     *
     * Example: F-2
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
