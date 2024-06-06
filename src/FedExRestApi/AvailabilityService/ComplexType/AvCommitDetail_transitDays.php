<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The number of days the package/shipment is to be in transit. Applies to Ground and LTL Freight; indicates minimum transit time for SmartPost.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property string $minimumTransitTime
 * @property string $maximumTransitTime

 */
class AvCommitDetail_transitDays extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvCommitDetail_transitDays';

    /**
     * Specifies the number of days the package/shipment is to be in transit.
     *
     *
     * Example: 2-7 Business Days
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * This is a code indicating the number of transit days available.
     *
     * simpleClass: AvMinimumTransitTime
     * Example: TWO_DAYS
     * @param string $minimumTransitTime
     * @return $this
     */
    public function setMinimumTransitTime($minimumTransitTime)
    {
        $this->values['minimumTransitTime'] = $minimumTransitTime;
        return $this;
    }

    /**
     * Get minimumTransitTime
     *
     * @return string
     */
    public function getMinimumTransitTime()
    {
        return $this->values['minimumTransitTime'];
    }

    /**
     * Set maximumTransitTime
     *
     *
     * Example: SEVEN_DAYS
     * @param string $maximumTransitTime
     * @return $this
     */
    public function setMaximumTransitTime($maximumTransitTime)
    {
        $this->values['maximumTransitTime'] = $maximumTransitTime;
        return $this;
    }

    /**
     * Get maximumTransitTime
     *
     * @return string
     */
    public function getMaximumTransitTime()
    {
        return $this->values['maximumTransitTime'];
    }
}
