<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when a shipment is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipAlert[] $alerts

 */
class ShipVerifyShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipVerifyShipmentOutputVO';

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
