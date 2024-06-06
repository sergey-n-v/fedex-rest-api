<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the minimum required time window  between the  shipment ReadyTime and the customer close time (or the local 'cutoff time' if it is earlier than the customer close time). <br> Example: hours: 1 minutes: 30
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $hours
 * @property int $minutes

 */
class PickupDuration extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupDuration';

    /**
     * This is the minimum time window in hours that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     *
     * Example: 1
     * @param int $hours
     * @return $this
     */
    public function setHours($hours)
    {
        $this->values['hours'] = $hours;
        return $this;
    }

    /**
     * Get hours
     *
     * @return int
     */
    public function getHours()
    {
        return $this->values['hours'];
    }

    /**
     * This is the minimum time window in minutes that is allocated for the FedEx courier to make the pickup.<br> Example: 'PT1H0M' means Pickup Time is 1 Hour and 0 Minutes
     *
     *
     * Example: 30
     * @param int $minutes
     * @return $this
     */
    public function setMinutes($minutes)
    {
        $this->values['minutes'] = $minutes;
        return $this;
    }

    /**
     * Get minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->values['minutes'];
    }
}
