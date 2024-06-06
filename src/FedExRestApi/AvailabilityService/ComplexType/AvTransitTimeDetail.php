<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are the transit time associated with the available shipment services.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property AvCustomerMessage[] $customerMessages
 * @property AvDistance $distance
 * @property AvCommitDetail $commit
 * @property AvLocationDetail $destinationLocation
 * @property string $serviceName

 */
class AvTransitTimeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeDetail';

    /**
     * Type of the service is returned.
     *
     *
     * Example: GROUND_HOME_DELIVERY
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * These are messages returned in the response.
     *
     *
     * Example:
     * @param AvCustomerMessage[] $customerMessages
     * @return $this
     */
    public function setCustomerMessages(array $customerMessages)
    {
        $this->values['customerMessages'] = $customerMessages;
        return $this;
    }

    /**
     * Get customerMessages
     *
     * @return AvCustomerMessage[]
     */
    public function getCustomerMessages()
    {
        return $this->values['customerMessages'];
    }

    /**
     * Set distance
     *
     *
     * Example:
     * @param AvDistance $distance
     * @return $this
     */
    public function setDistance(AvDistance $distance)
    {
        $this->values['distance'] = $distance;
        return $this;
    }

    /**
     * Get distance
     *
     * @return AvDistance
     */
    public function getDistance()
    {
        return $this->values['distance'];
    }

    /**
     * Set commit
     *
     *
     * Example:
     * @param AvCommitDetail $commit
     * @return $this
     */
    public function setCommit(AvCommitDetail $commit)
    {
        $this->values['commit'] = $commit;
        return $this;
    }

    /**
     * Get commit
     *
     * @return AvCommitDetail
     */
    public function getCommit()
    {
        return $this->values['commit'];
    }

    /**
     * Set destinationLocation
     *
     *
     * Example:
     * @param AvLocationDetail $destinationLocation
     * @return $this
     */
    public function setDestinationLocation(AvLocationDetail $destinationLocation)
    {
        $this->values['destinationLocation'] = $destinationLocation;
        return $this;
    }

    /**
     * Get destinationLocation
     *
     * @return AvLocationDetail
     */
    public function getDestinationLocation()
    {
        return $this->values['destinationLocation'];
    }

    /**
     * Name of service returned.
     *
     *
     * Example: FedEx Home Delivery
     * @param string $serviceName
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->values['serviceName'] = $serviceName;
        return $this;
    }

    /**
     * Get serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->values['serviceName'];
    }
}
