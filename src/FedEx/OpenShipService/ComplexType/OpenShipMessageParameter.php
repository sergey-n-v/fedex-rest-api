<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipMessageParameter
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $id
 * @property string $value

 */
class OpenShipMessageParameter extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipMessageParameter';

    /**
     * Specifies the message parameter code.<br>Example: message ID
     *
     * 
     * Example: message ID
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['id'] = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->values['id'];
    }

    /**
     * Specifies the message parameter value of the code.<br>Example: value
     *
     * 
     * Example: Message value
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
