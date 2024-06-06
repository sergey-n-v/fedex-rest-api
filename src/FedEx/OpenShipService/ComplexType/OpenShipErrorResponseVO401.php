<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipErrorResponseVO401
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property OpenShipCXSError401[] $errors

 */
class OpenShipErrorResponseVO401 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipErrorResponseVO401';

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
     * @param OpenShipCXSError401[] $errors
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
     * @return OpenShipCXSError401[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
