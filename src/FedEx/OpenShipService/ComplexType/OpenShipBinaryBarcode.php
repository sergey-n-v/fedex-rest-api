<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $value

 */
class OpenShipBinaryBarcode extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipBinaryBarcode';

    /**
     * This is the type of barcode data available in this instance.<br> Example: COMMON-2D
     *
     * 
     * Example: COMMON-2D
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
     * This is the value.
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
}
