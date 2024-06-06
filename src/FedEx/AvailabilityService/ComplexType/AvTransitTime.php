<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the commit time for a FedEx Ground shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvTransitTimeDetail[] $transitTimeDetails

 */
class AvTransitTime extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTime';

    /**
     * Specifies the details regarding transit times.
     *
     * 
     * Example: 
     * @param AvTransitTimeDetail[] $transitTimeDetails
     * @return $this
     */
    public function setTransitTimeDetails(array $transitTimeDetails)
    {
        $this->values['transitTimeDetails'] = $transitTimeDetails;
        return $this;
    }

    /**
     * Get transitTimeDetails
     *
     * @return AvTransitTimeDetail[]
     */
    public function getTransitTimeDetails()
    {
        return $this->values['transitTimeDetails'];
    }
}
