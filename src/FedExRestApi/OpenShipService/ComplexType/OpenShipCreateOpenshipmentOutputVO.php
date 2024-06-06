<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when a shipment is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $asynchronousProcessingResultsDetail
 * @property string $jobId
 * @property OpenShipTransactionOpenShipmentOutputVO[] $transactionShipments
 * @property OpenShipAlert[] $alerts

 */
class OpenShipCreateOpenshipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCreateOpenshipmentOutputVO';

    /**
     * This field describes how the the shipment is processed.
  Example: SYNCHRONOUSLY_PROCESSED
     *
     *
     * Example: SYNCHRONOUSLY_PROCESSED
     * @param string $asynchronousProcessingResultsDetail
     * @return $this
     */
    public function setAsynchronousProcessingResultsDetail($asynchronousProcessingResultsDetail)
    {
        $this->values['asynchronousProcessingResultsDetail'] = $asynchronousProcessingResultsDetail;
        return $this;
    }

    /**
     * Get asynchronousProcessingResultsDetail
     *
     * @return string
     */
    public function getAsynchronousProcessingResultsDetail()
    {
        return $this->values['asynchronousProcessingResultsDetail'];
    }

    /**
     * Unique identifier for a Job. Example: abc123456
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
     * The shipping transaction details, such as master tracking number, service type, and ship timestamp.
     *
     *
     * Example:
     * @param OpenShipTransactionOpenShipmentOutputVO[] $transactionShipments
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
     * @return OpenShipTransactionOpenShipmentOutputVO[]
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
