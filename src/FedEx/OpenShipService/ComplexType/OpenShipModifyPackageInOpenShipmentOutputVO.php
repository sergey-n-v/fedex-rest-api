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
 * @property OpenShipTransactionShipmentOutputVO[] $transactionShipments
 * @property OpenShipAlert[] $alerts

 */
class OpenShipModifyPackageInOpenShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipModifyPackageInOpenShipmentOutputVO';

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
     * The alerts received when a shipShipment is processed. This includes the alert code, alert type, and alert message.
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
