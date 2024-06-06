<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are Broker Detail for the rate quote.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateBrokerDetailBroker $broker
 * @property string $type
 * @property string $brokerCommitTimestamp
 * @property string $brokerCommitDayOfWeek
 * @property string $brokerLocationId
 * @property RateBrokeraddress $brokerAddress
 * @property int $brokerToDestinationDays

 */
class RateBrokerDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateBrokerDetail';

    /**
     * Set broker
     *
     *
     * Example:
     * @param RateBrokerDetailBroker $broker
     * @return $this
     */
    public function setBroker(RateBrokerDetailBroker $broker)
    {
        $this->values['broker'] = $broker;
        return $this;
    }

    /**
     * Get broker
     *
     * @return RateBrokerDetailBroker
     */
    public function getBroker()
    {
        return $this->values['broker'];
    }

    /**
     * Set type
     *
     * simpleClass: RateType
     * Example: EXPORT
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set brokerCommitTimestamp
     *
     *
     * Example: 2019-07-22
     * @param string $brokerCommitTimestamp
     * @return $this
     */
    public function setBrokerCommitTimestamp($brokerCommitTimestamp)
    {
        $this->values['brokerCommitTimestamp'] = $brokerCommitTimestamp;
        return $this;
    }

    /**
     * Get brokerCommitTimestamp
     *
     * @return string
     */
    public function getBrokerCommitTimestamp()
    {
        return $this->values['brokerCommitTimestamp'];
    }

    /**
     * Set brokerCommitDayOfWeek
     *
     *
     * Example: SUNDAY
     * @param string $brokerCommitDayOfWeek
     * @return $this
     */
    public function setBrokerCommitDayOfWeek($brokerCommitDayOfWeek)
    {
        $this->values['brokerCommitDayOfWeek'] = $brokerCommitDayOfWeek;
        return $this;
    }

    /**
     * Get brokerCommitDayOfWeek
     *
     * @return string
     */
    public function getBrokerCommitDayOfWeek()
    {
        return $this->values['brokerCommitDayOfWeek'];
    }

    /**
     * Set brokerLocationId
     *
     *
     * Example: brokerLocationId
     * @param string $brokerLocationId
     * @return $this
     */
    public function setBrokerLocationId($brokerLocationId)
    {
        $this->values['brokerLocationId'] = $brokerLocationId;
        return $this;
    }

    /**
     * Get brokerLocationId
     *
     * @return string
     */
    public function getBrokerLocationId()
    {
        return $this->values['brokerLocationId'];
    }

    /**
     * Set brokerAddress
     *
     *
     * Example:
     * @param RateBrokeraddress $brokerAddress
     * @return $this
     */
    public function setBrokerAddress(RateBrokeraddress $brokerAddress)
    {
        $this->values['brokerAddress'] = $brokerAddress;
        return $this;
    }

    /**
     * Get brokerAddress
     *
     * @return RateBrokeraddress
     */
    public function getBrokerAddress()
    {
        return $this->values['brokerAddress'];
    }

    /**
     * Set brokerToDestinationDays
     *
     *
     * Example: 10
     * @param int $brokerToDestinationDays
     * @return $this
     */
    public function setBrokerToDestinationDays($brokerToDestinationDays)
    {
        $this->values['brokerToDestinationDays'] = $brokerToDestinationDays;
        return $this;
    }

    /**
     * Get brokerToDestinationDays
     *
     * @return int
     */
    public function getBrokerToDestinationDays()
    {
        return $this->values['brokerToDestinationDays'];
    }
}
