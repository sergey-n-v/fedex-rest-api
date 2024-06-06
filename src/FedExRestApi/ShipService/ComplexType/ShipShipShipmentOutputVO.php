<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the response received when a shipment is requested.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipTransactionShipmentOutputVO[] $transactionShipments
 * @property ShipAlert[] $alerts
 * @property string $jobId

 */
class ShipShipShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShipShipmentOutputVO';

    /**
     * Set transactionShipments
     *
     *
     * Example:
     * @param ShipTransactionShipmentOutputVO[] $transactionShipments
     * @return $this
     */
    public function setTransactionShipments(array $transactionShipments)
    {
        $this->values['transactionShipments'] = $transactionShipments;
        return $this;
    }

    /**
     * Get transactionShipments
     *
     * @return ShipTransactionShipmentOutputVO[]
     */
    public function getTransactionShipments()
    {
        return $this->values['transactionShipments'];
    }

    /**
     * Set alerts
     *
     *
     * Example:
     * @param ShipAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return ShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * Set jobId
     *
     *
     * Example: abc123456
     * @param string $jobId
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->values['jobId'] = $jobId;
        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->values['jobId'];
    }
}
