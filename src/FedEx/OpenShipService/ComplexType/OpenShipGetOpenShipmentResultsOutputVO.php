<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipGetOpenShipmentResultsOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipTransactionShipmentOutputVO[] $transactionShipments
 * @property OpenShipAlert[] $alerts

 */
class OpenShipGetOpenShipmentResultsOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipGetOpenShipmentResultsOutputVO';

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
     * Set alerts
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
