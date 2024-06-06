<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The response elements received when a shipment is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $jobId
 * @property OpenShipTransactionShipmentOutputVO[] $transactionShipments
 * @property OpenShipAlert[] $alerts

 */
class OpenShipConfirmOpenShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipConfirmOpenShipmentOutputVO';

    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request. Example: abc123456
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

    /**
     * These are shipping transaction details, such as master tracking number, service type, and ship date and time.
     *
     * 
     * Example: 
     * @param OpenShipTransactionShipmentOutputVO[] $transactionShipments
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
     * @return OpenShipTransactionShipmentOutputVO[]
     */
    public function getTransactionShipments()
    {
        return $this->values['transactionShipments'];
    }

    /**
     * The alerts details received in the response.
     *
     * 
     * Example: 
     * @param OpenShipAlert[] $alerts
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
     * @return OpenShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
