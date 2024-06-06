<?php
namespace FedExRestApi\PickupService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The pickup availability response elements.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $requestTimestamp
 * @property PickupPickupScheduleOption[] $options
 * @property PickupAlert[] $alerts

 */
class PickupPickupAvailabilityOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupAvailabilityOutputVO';

    /**
     * The time when the PickupAvailability request was processed.<br>Note:<br>1.The date format must be YYYY-MM-DDTHH:MM:SS.<br> 2.The time must be in the format: HH:MM:SS using a 24-hour clock.<br>3.The date and time are separated by the letter T, such as 2015-03-25T09:30:00.<br>4.The time is local to the pickup postal code<br> 5.Do not include a TZD (time zone designator) as it will be ignored.<br>Example: 2019-11-15T11:00:00
     *
     *
     * Example: 2020-04-02T04:19:00
     * @param string $requestTimestamp
     * @return $this
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->values['requestTimestamp'] = $requestTimestamp;
        return $this;
    }

    /**
     * Get requestTimestamp
     *
     * @return string
     */
    public function getRequestTimestamp()
    {
        return $this->values['requestTimestamp'];
    }

    /**
     * The pickup schedule details, such as the carrier, latest available time of pickup, default latest available time, availability for pickup, time when the package is ready to be picked up, indication if the address is residential, cutoff time of the pickup, and driver's access to pick up the package.
     *
     *
     * Example:
     * @param PickupPickupScheduleOption[] $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return PickupPickupScheduleOption[]
     */
    public function getOptions()
    {
        return $this->values['options'];
    }

    /**
     * Any optional alert messages received when a pickup availability is requested. This includes an alert code, type, and message.
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
