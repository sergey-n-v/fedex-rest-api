<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupPickupScheduleOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $carrier
 * @property boolean $available
 * @property string $pickupDate
 * @property string $cutOffTime
 * @property PickupDuration $accessTime
 * @property boolean $residentialAvailable
 * @property string $countryRelationship
 * @property string $scheduleDay
 * @property string $defaultReadyTime
 * @property  $defaultLatestTimeOptions
 * @property string $earlyCutOffTime
 * @property PickupDuration $earlyAccessTime
 * @property string $earlyPickupLocationId
 * @property string $readyTimeOptions
 * @property string $latestTimeOptions

 */
class PickupPickupScheduleOption extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'PickupPickupScheduleOption';

    /**
     * Specifies the FedEx transportation carrier for the pickup option.
     *
     * simpleClass: PickupCarrier
     * Example: FDXE
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->values['carrier'] = $carrier;
        return $this;
    }

    /**
     * Get carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->values['carrier'];
    }

    /**
     * Indicates the availability of pickup option.If the value is true, it indicates the pickup option is available. If the value is false, it indicates pickup option is not available.
     *
     * 
     * Example: 1
     * @param boolean $available
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->values['available'] = $available;
        return $this;
    }

    /**
     * Get available
     *
     * @return boolean
     */
    public function getAvailable()
    {
        return $this->values['available'];
    }

    /**
     * Indicates the date (in the pickup postal code's time zone)which refers to the pickup schedule option.<br> Format: YYYY-MM-DD <br> Example: 2019-01-20
     *
     * 
     * Example: 2019-01-20
     * @param string $pickupDate
     * @return $this
     */
    public function setPickupDate($pickupDate)
    {
        $this->values['pickupDate'] = $pickupDate;
        return $this;
    }

    /**
     * Get pickupDate
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->values['pickupDate'];
    }

    /**
     * Specifies the latest allowed ready time for the pickup option. The time is local to the pickup postal code. <br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * 
     * Example: 18:30:00
     * @param string $cutOffTime
     * @return $this
     */
    public function setCutOffTime($cutOffTime)
    {
        $this->values['cutOffTime'] = $cutOffTime;
        return $this;
    }

    /**
     * Get cutOffTime
     *
     * @return string
     */
    public function getCutOffTime()
    {
        return $this->values['cutOffTime'];
    }

    /**
     * Set accessTime
     *
     * 
     * Example: 
     * @param PickupDuration $accessTime
     * @return $this
     */
    public function setAccessTime(PickupDuration $accessTime)
    {
        $this->values['accessTime'] = $accessTime;
        return $this;
    }

    /**
     * Get accessTime
     *
     * @return PickupDuration
     */
    public function getAccessTime()
    {
        return $this->values['accessTime'];
    }

    /**
     * Indicates whether residential pickup is available for the requested postal code.
     *
     * 
     * Example: 1
     * @param boolean $residentialAvailable
     * @return $this
     */
    public function setResidentialAvailable($residentialAvailable)
    {
        $this->values['residentialAvailable'] = $residentialAvailable;
        return $this;
    }

    /**
     * Get residentialAvailable
     *
     * @return boolean
     */
    public function getResidentialAvailable()
    {
        return $this->values['residentialAvailable'];
    }

    /**
     * Describes the country relationship among the shipments.DOMESTIC indicates intra-country shipping and cut off times.<br> INTERNATIONAL indicates inter-country shipping and cut off times.<br>Cut off times may vary for DOMESTIC and INTERNATIONAL.
     *
     * 
     * Example: INTERNATIONAL
     * @param string $countryRelationship
     * @return $this
     */
    public function setCountryRelationship($countryRelationship)
    {
        $this->values['countryRelationship'] = $countryRelationship;
        return $this;
    }

    /**
     * Get countryRelationship
     *
     * @return string
     */
    public function getCountryRelationship()
    {
        return $this->values['countryRelationship'];
    }

    /**
     * Indicates scheduled pickup day of the week.
     *
     * simpleClass: PickupScheduleDay
     * Example: SAME_DAY
     * @param string $scheduleDay
     * @return $this
     */
    public function setScheduleDay($scheduleDay)
    {
        $this->values['scheduleDay'] = $scheduleDay;
        return $this;
    }

    /**
     * Get scheduleDay
     *
     * @return string
     */
    public function getScheduleDay()
    {
        return $this->values['scheduleDay'];
    }

    /**
     * The default ready time for the shipment to be picked up. FedEx will assume the shipment is ready for pickup at this time unless otherwise indicated on the 'CreatePickup' Request. Format:HH:MM:SS <br> Example: 14:00:00
     *
     * 
     * Example: 14:00:00
     * @param string $defaultReadyTime
     * @return $this
     */
    public function setDefaultReadyTime($defaultReadyTime)
    {
        $this->values['defaultReadyTime'] = $defaultReadyTime;
        return $this;
    }

    /**
     * Get defaultReadyTime
     *
     * @return string
     */
    public function getDefaultReadyTime()
    {
        return $this->values['defaultReadyTime'];
    }

    /**
     * The default latest time for the shipment to be picked up.<br>Format:HH:MM:SS <br> Example: 19:00:00
     *
     * 
     * Example: 19:00:00
     * @param  $defaultLatestTimeOptions
     * @return $this
     */
    public function setDefaultLatestTimeOptions($defaultLatestTimeOptions)
    {
        $this->values['defaultLatestTimeOptions'] = $defaultLatestTimeOptions;
        return $this;
    }

    /**
     * Get defaultLatestTimeOptions
     *
     * @return 
     */
    public function getDefaultLatestTimeOptions()
    {
        return $this->values['defaultLatestTimeOptions'];
    }

    /**
     * Identifies the early cut-off time for the pickup option. The time is local to the pickup postal code. It includes a TZD (time zone designator) for FedEx Freight requests.<br> Format:  HH:MM:SS <br> Example: 18:30:00
     *
     * 
     * Example: 14:30:00
     * @param string $earlyCutOffTime
     * @return $this
     */
    public function setEarlyCutOffTime($earlyCutOffTime)
    {
        $this->values['earlyCutOffTime'] = $earlyCutOffTime;
        return $this;
    }

    /**
     * Get earlyCutOffTime
     *
     * @return string
     */
    public function getEarlyCutOffTime()
    {
        return $this->values['earlyCutOffTime'];
    }

    /**
     * Set earlyAccessTime
     *
     * 
     * Example: 
     * @param PickupDuration $earlyAccessTime
     * @return $this
     */
    public function setEarlyAccessTime(PickupDuration $earlyAccessTime)
    {
        $this->values['earlyAccessTime'] = $earlyAccessTime;
        return $this;
    }

    /**
     * Get earlyAccessTime
     *
     * @return PickupDuration
     */
    public function getEarlyAccessTime()
    {
        return $this->values['earlyAccessTime'];
    }

    /**
     * The location from where the package will be picked up <br> Example: PITA
     *
     * 
     * Example: PITA
     * @param string $earlyPickupLocationId
     * @return $this
     */
    public function setEarlyPickupLocationId($earlyPickupLocationId)
    {
        $this->values['earlyPickupLocationId'] = $earlyPickupLocationId;
        return $this;
    }

    /**
     * Get earlyPickupLocationId
     *
     * @return string
     */
    public function getEarlyPickupLocationId()
    {
        return $this->values['earlyPickupLocationId'];
    }

    /**
     * The ReadyTimeOptions indicates the possible ready time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 11:00:00, 11:30:00 <br>Note:Based on the cutOffTimes provided readyTimeOptions are returned.
     *
     * 
     * Example: 
     * @param string $readyTimeOptions
     * @return $this
     */
    public function setReadyTimeOptions(array $readyTimeOptions)
    {
        $this->values['readyTimeOptions'] = $readyTimeOptions;
        return $this;
    }

    /**
     * Get readyTimeOptions
     *
     * @return string
     */
    public function getReadyTimeOptions()
    {
        return $this->values['readyTimeOptions'];
    }

    /**
     * The LatestTimeOptions indicates the possible latest time windows for the shipment to be picked up.FedEx will assume the shipment is ready for pickup at this time <br>Example: 12:00:00,12:30:00,13:00:00,13:30:00....23:59:00<br> Note:LatestTimeOptions are return till endoftheday timings.
     *
     * 
     * Example: 
     * @param string $latestTimeOptions
     * @return $this
     */
    public function setLatestTimeOptions(array $latestTimeOptions)
    {
        $this->values['latestTimeOptions'] = $latestTimeOptions;
        return $this;
    }

    /**
     * Get latestTimeOptions
     *
     * @return string
     */
    public function getLatestTimeOptions()
    {
        return $this->values['latestTimeOptions'];
    }
}
