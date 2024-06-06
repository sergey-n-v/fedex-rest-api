<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when you create a pickup.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $pickupConfirmationCode
 * @property string $message
 * @property string $location
 * @property PickupAlert[] $alerts

 */
class PickupCreatePickupOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupCreatePickupOutputVO';

    /**
     * The confirmation number provided to the customer when a pickup is requested <br> Example : 3001
     *
     *
     * Example: 3001
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
     * Human-readable text that explains pickup notification <br> Example: Courier on the way
     *
     *
     * Example: Courier on the way
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->values['message'] = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->values['message'];
    }

    /**
     * The location from where the package will be picked up. <br><br><i>Note: The location will only be returned for Express Pickup.<i><br><br>Example: COSA
     *
     *
     * Example: COSA
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->values['location'] = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->values['location'];
    }

    /**
     * These are optional alerts received when a Create pickup is requested. This includes an alert code, type, and message.
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
