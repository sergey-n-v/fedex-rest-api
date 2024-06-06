<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property OpenShipParameter[] $parameterList
 * @property string $message

 */
class OpenShipCXSError_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCXSError_2';

    /**
     * Indicates the error code.<br>Example: TRACKINGNUMBER.ENTERED.INVALID
     *
     * 
     * Example: 
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * Specifies the message parameter list.
     *
     * 
     * Example: 
     * @param OpenShipParameter[] $parameterList
     * @return $this
     */
    public function setParameterList(array $parameterList)
    {
        $this->values['parameterList'] = $parameterList;
        return $this;
    }

    /**
     * Get parameterList
     *
     * @return OpenShipParameter[]
     */
    public function getParameterList()
    {
        return $this->values['parameterList'];
    }

    /**
     * Indicates the description of API error alert message.<br>Example: Error with entered Tracking Number. Please verify the entered Tracking Number.
     *
     * 
     * Example: 
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
