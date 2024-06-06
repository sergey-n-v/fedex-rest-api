<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Wrapper class for ShipShipmentOutputVO. It holds transactionId and output.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property string $customerTransactionId
 * @property ShipBaseProcessOutputVO_CreateTag $output

 */
class ShipSHPCResponseVO_CreateTag extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSHPCResponseVO_CreateTag';

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
     * @param ShipBaseProcessOutputVO_CreateTag $output
     * @return $this
     */
    public function setOutput(ShipBaseProcessOutputVO_CreateTag $output)
    {
        $this->values['output'] = $output;
        return $this;
    }

    /**
     * Get output
     *
     * @return ShipBaseProcessOutputVO_CreateTag
     */
    public function getOutput()
    {
        return $this->values['output'];
    }
}
