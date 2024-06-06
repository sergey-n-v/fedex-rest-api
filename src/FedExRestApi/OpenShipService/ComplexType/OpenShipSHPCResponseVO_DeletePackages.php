<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Wrapper class for Delete Packages From OpenshipmentOutputVO. It holds transactionId and output.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property OpenShipBaseProcessOutputVO_DeletePackages $output

 */
class OpenShipSHPCResponseVO_DeletePackages extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSHPCResponseVO_DeletePackages';

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
     *
     *
     * Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: 624xxxxx-b709-470c-8c39-4b55112xxxxx
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
     * Set output
     *
     *
     * Example:
     * @param OpenShipBaseProcessOutputVO_DeletePackages $output
     * @return $this
     */
    public function setOutput(OpenShipBaseProcessOutputVO_DeletePackages $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return OpenShipBaseProcessOutputVO_DeletePackages
     */
    public function getOutput()
    {
        return $this->values['output'];
    }
}
