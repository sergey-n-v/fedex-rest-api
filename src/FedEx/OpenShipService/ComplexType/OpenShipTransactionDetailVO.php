<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipTransactionDetailVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionDetails
 * @property string $transactionId

 */
class OpenShipTransactionDetailVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipTransactionDetailVO';

    /**
     * Includes data returned which governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.<br>Example: transactionDetails
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
     * This element has a unique identifier added in your request, helps you match the request to the reply. Maximum of 40 characters allowed.<br>Example: XXXX_XXX123XXXXX.
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
