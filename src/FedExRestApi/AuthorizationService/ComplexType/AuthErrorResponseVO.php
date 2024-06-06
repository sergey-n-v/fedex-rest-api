<?php
namespace FedExRestApi\AuthorizationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * AuthErrorResponseVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property array $errors

 */
class AuthErrorResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthErrorResponseVO';

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     *
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->values['transactionId'] = $transactionId;
        return $this;
    }

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->values['transactionId'];
    }

    /**
     * Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     *
     * @param AuthCXSError[] $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->values['errors'] = $errors;
        return $this;
    }

    /**
     * Indicates error details when suspicious files, potential exploits and viruses are found while scanning files, directories and user accounts. This includes code, message and error parameters.
     *
     * @return AuthCXSError[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
