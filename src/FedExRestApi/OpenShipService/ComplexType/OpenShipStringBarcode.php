<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property string $value

 */
class OpenShipStringBarcode extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipStringBarcode';

    /**
     * This is the type of barcode data in this instance. <br>Valid values:<ul><li>ADDRESS - Represents the recipient address.</li></ul>
     *
     *
     * Example: ADDRESS
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
     * This is the value.<br>Example: 1010062512241535917900794953544894
     *
     *
     * Example: 1010062512241535917900794953544894
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
