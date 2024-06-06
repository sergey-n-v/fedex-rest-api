<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipErrorResponseVO401
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property ShipCXSError401[] $errors

 */
class ShipErrorResponseVO401 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipErrorResponseVO401';

    /**
     * Set transactionId
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
     * @param ShipCXSError401[] $errors
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
     * @return ShipCXSError401[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
