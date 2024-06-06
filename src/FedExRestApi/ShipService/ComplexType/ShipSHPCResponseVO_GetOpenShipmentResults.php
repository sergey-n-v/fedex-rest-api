<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Wrapper class for GetOpenshipmentResultsOutputVo. It holds transactionId and output.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property ShipBaseProcessOutputVO_GetOpenShipmentResults $output

 */
class ShipSHPCResponseVO_GetOpenShipmentResults extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSHPCResponseVO_GetOpenShipmentResults';

    /**
     * Set transactionId
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
     * Set customerTransactionId
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
     * @param ShipBaseProcessOutputVO_GetOpenShipmentResults $output
     * @return $this
     */
    public function setOutput(ShipBaseProcessOutputVO_GetOpenShipmentResults $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return ShipBaseProcessOutputVO_GetOpenShipmentResults
     */
    public function getOutput()
    {
        return $this->values['output'];
    }
}
