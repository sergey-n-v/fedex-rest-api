<?php
namespace FedExRestApi\AuthorizationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AuthCXSError
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $code
 * @property array $parameterList
 * @property string $message

 */
class AuthCXSError extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthCXSError';

    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->values['code'] = $code;
        return $this;
    }

    /**
     * Indicates the error code.<br>Example: NOT.FOUND.ERROR
     *
     * @return string
     */
    public function getCode()
    {
        return $this->values['code'];
    }

    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @param AuthParameter[] $parameterList
     * @return $this
     */
    public function setParameterList(array $parameterList)
    {
        $this->values['parameterList'] = $parameterList;
        return $this;
    }

    /**
     * List of parameters which indicates the properties of the alert message.
     *
     * @return AuthParameter[]
     */
    public function getParameterList()
    {
        return $this->values['parameterList'];
    }

    /**
     * Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Indicates the API error alert message.<br>Example: We are unable to process this request. Please try again later or contact FedEx Customer Service.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }
}
