<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Wrapper class for CreateOpenShipmentOutputVO. It holds transactionId and output.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property OpenShipBaseProcessOutputVO_CreateOpenshipmentOutputVO $output

 */
class OpenShipSHPCResponseVO_CreateOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSHPCResponseVO_CreateOpenShipment';

    /**
     * The transaction ID is a special set of numbers that defines each transaction.<br>Example: 624deea6-b709-470c-8c39-4b5511281492
     *
     * 
     * Example: 624dxxx6-b709-470c-8c39-4b55xxxxx492
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
     * This element allows you to assign a unique identifier to your transaction. This element is also returned in the reply and helps you match the request to the reply. <br> Example: order12xxxx789
     *
     * 
     * Example: order123xxxx89
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
     * @param OpenShipBaseProcessOutputVO_CreateOpenshipmentOutputVO $output
     * @return $this
     */
    public function setOutput(OpenShipBaseProcessOutputVO_CreateOpenshipmentOutputVO $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return OpenShipBaseProcessOutputVO_CreateOpenshipmentOutputVO
     */
    public function getOutput()
    {
        return $this->values['output'];
    }
}
