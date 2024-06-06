<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when a shipment is cancelled.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $cancelledShipment
 * @property boolean $cancelledHistory
 * @property string $successMessage
 * @property ShipAlert[] $alerts

 */
class ShipCancelShipmentOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCancelShipmentOutputVO';

    /**
     * Set cancelledShipment
     *
     *
     * Example: 1
     * @param boolean $cancelledShipment
     * @return $this
     */
    public function setCancelledShipment($cancelledShipment)
    {
        $this->values['cancelledShipment'] = $cancelledShipment;
        return $this;
    }

    /**
     * Get cancelledShipment
     *
     * @return boolean
     */
    public function getCancelledShipment()
    {
        return $this->values['cancelledShipment'];
    }

    /**
     * Set cancelledHistory
     *
     *
     * Example: 1
     * @param boolean $cancelledHistory
     * @return $this
     */
    public function setCancelledHistory($cancelledHistory)
    {
        $this->values['cancelledHistory'] = $cancelledHistory;
        return $this;
    }

    /**
     * Get cancelledHistory
     *
     * @return boolean
     */
    public function getCancelledHistory()
    {
        return $this->values['cancelledHistory'];
    }

    /**
     * Set successMessage
     *
     *
     * Example: Success
     * @param string $successMessage
     * @return $this
     */
    public function setSuccessMessage($successMessage)
    {
        $this->values['successMessage'] = $successMessage;
        return $this;
    }

    /**
     * Get successMessage
     *
     * @return string
     */
    public function getSuccessMessage()
    {
        return $this->values['successMessage'];
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
