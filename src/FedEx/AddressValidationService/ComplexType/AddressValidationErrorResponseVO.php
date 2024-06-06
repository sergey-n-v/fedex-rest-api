<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationErrorResponseVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property AddressValidationCXSError[] $errors

 */
class AddressValidationErrorResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationErrorResponseVO';

    /**
     * Unique identifier returned in the reply and helps you match the request to the reply.<br>Example: XXX_ORDERXXXX789
     *
     * 
     * Example: bc95c0e4-b33e-42a2-80d2-334282b5d37a
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->values['transactionId'] = $transactionId;
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->values['transactionId'];
    }

    /**
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: AnyCo_order123456789
     *
     * 
     * Example: AnyCo_order123456789
     * @param string $customerTransactionId
     * @return $this
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->values['customerTransactionId'] = $customerTransactionId;
        return $this;
    }

    /**
     * Get customerTransactionId
     *
     * @return string
     */
    public function getCustomerTransactionId()
    {
        return $this->values['customerTransactionId'];
    }

    /**
     * Indicates error alert when suspicious files, potential exploits and viruses found while scanning files, directories and user accounts. This includes code, message and parameters.
     *
     * 
     * Example: 
     * @param AddressValidationCXSError[] $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->values['errors'] = $errors;
        return $this;
    }

    /**
     * Get errors
     *
     * @return AddressValidationCXSError[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
