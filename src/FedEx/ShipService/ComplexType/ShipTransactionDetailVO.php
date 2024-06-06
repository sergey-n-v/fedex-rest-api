<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipTransactionDetailVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionDetails
 * @property string $transactionId

 */
class ShipTransactionDetailVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipTransactionDetailVO';

    /**
     * Set transactionDetails
     *
     * 
     * Example: transactionDetails
     * @param string $transactionDetails
     * @return $this
     */
    public function setTransactionDetails($transactionDetails)
    {
        $this->values['transactionDetails'] = $transactionDetails;
        return $this;
    }

    /**
     * Get transactionDetails
     *
     * @return string
     */
    public function getTransactionDetails()
    {
        return $this->values['transactionDetails'];
    }

    /**
     * Set transactionId
     *
     * 
     * Example: 12345
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
}
