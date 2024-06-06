<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipErrorResponseVO403_2
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property ShipCXSError403[] $errors

 */
class ShipErrorResponseVO403_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipErrorResponseVO403_2';

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
     * @param ShipCXSError403[] $errors
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
     * @return ShipCXSError403[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
