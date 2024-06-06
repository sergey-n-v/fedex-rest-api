<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The cancel pickup response elements.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pickupConfirmationCode
 * @property string $cancelConfirmationMessage
 * @property PickupAlert[] $alerts

 */
class PickupCancelPickupOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupCancelPickupOutputVO';

    /**
     * Specify the pickup confirmation code. <br> Example: NQAA97
     *
     * 
     * Example: NQAA97
     * @param string $pickupConfirmationCode
     * @return $this
     */
    public function setPickupConfirmationCode($pickupConfirmationCode)
    {
        $this->values['pickupConfirmationCode'] = $pickupConfirmationCode;
        return $this;
    }

    /**
     * Get pickupConfirmationCode
     *
     * @return string
     */
    public function getPickupConfirmationCode()
    {
        return $this->values['pickupConfirmationCode'];
    }

    /**
     * Indicates a cancelled pickup confirmation message.<br> Example: Requested pickup has been cancelled successfully.
     *
     * 
     * Example: Requested pickup has been cancelled Successfully.
     * @param string $cancelConfirmationMessage
     * @return $this
     */
    public function setCancelConfirmationMessage($cancelConfirmationMessage)
    {
        $this->values['cancelConfirmationMessage'] = $cancelConfirmationMessage;
        return $this;
    }

    /**
     * Get cancelConfirmationMessage
     *
     * @return string
     */
    public function getCancelConfirmationMessage()
    {
        return $this->values['cancelConfirmationMessage'];
    }

    /**
     * Optional alerts received when a cancel pickup is requested. This includes an alert code, type, and message.
     *
     * 
     * Example: 
     * @param PickupAlert[] $alerts
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
     * @return PickupAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
