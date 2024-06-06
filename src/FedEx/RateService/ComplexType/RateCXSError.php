<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateCXSError
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property RateParameter[] $parameterList
 * @property string $message

 */
class RateCXSError extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCXSError';

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
     * @param RateParameter[] $parameterList
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
     * @return RateParameter[]
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
