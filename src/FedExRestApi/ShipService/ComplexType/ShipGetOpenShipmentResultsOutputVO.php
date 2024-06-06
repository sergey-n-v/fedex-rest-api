<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipGetOpenShipmentResultsOutputVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipTransactionShipmentOutputVO[] $transactionShipments
 * @property ShipAlert[] $alerts

 */
class ShipGetOpenShipmentResultsOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipGetOpenShipmentResultsOutputVO';

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
}
