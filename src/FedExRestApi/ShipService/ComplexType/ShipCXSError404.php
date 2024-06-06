<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files , directories and user accounts. This includes code, message and parameter
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property ShipParameter[] $parameterList
 * @property  $message

 */
class ShipCXSError404 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCXSError404';

    /**
     * Set code
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
     * Set parameterList
     *
     *
     * Example:
     * @param ShipParameter[] $parameterList
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
     * @return ShipParameter[]
     */
    public function getParameterList()
    {
        return $this->values['parameterList'];
    }

    /**
     * Set message
     *
     *
     * Example:
     * @param  $message
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
     * @return
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
