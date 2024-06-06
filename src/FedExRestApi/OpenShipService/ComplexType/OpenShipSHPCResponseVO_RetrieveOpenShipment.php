<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Wrapper class for RetrieveOpenshipmentOutputVO. It holds transactionId and output.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property OpenShipBaseProcessOutputVO_RetrieveOpenShipment $output

 */
class OpenShipSHPCResponseVO_RetrieveOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSHPCResponseVO_RetrieveOpenShipment';

    /**
     * Unique identifier used to match requests to their respective responses. <br>Example: XXX_ORDERXXXX789
     *
     *
     * Example: XXX_ORDERXXXX789
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
     * Set output
     *
     *
     * Example:
     * @param OpenShipBaseProcessOutputVO_RetrieveOpenShipment $output
     * @return $this
     */
    public function setOutput(OpenShipBaseProcessOutputVO_RetrieveOpenShipment $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return OpenShipBaseProcessOutputVO_RetrieveOpenShipment
     */
    public function getOutput()
    {
        return $this->values['output'];
    }
}
