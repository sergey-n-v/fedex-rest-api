<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * PickupErrorResponseVO503
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property PickupCXSError503[] $errors

 */
class PickupErrorResponseVO503 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupErrorResponseVO503';

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     *
     * Example: 624deea6-b709-470c-8c39-4b5511281492
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
     * Set errors
     *
     *
     * Example:
     * @param PickupCXSError503[] $errors
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
     * @return PickupCXSError503[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
