<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is the output response details for the services and transit time request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvAlert[] $alerts
 * @property AvTransitTime[] $transitTimes
 * @property boolean $encoded

 */
class AvTransitTimeOutput extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeOutput';

    /**
     * These are alert details received with the response.
     *
     *
     * Example:
     * @param AvAlert[] $alerts
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
     * @return AvAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * These are services and transit times details received in the response.
     *
     *
     * Example:
     * @param AvTransitTime[] $transitTimes
     * @return $this
     */
    public function setTransitTimes(array $transitTimes)
    {
        $this->values['transitTimes'] = $transitTimes;
        return $this;
    }

    /**
     * Get transitTimes
     *
     * @return AvTransitTime[]
     */
    public function getTransitTimes()
    {
        return $this->values['transitTimes'];
    }

    /**
     * This field specifies the encoded flag.
     *
     *
     *
     * @param boolean $encoded
     * @return $this
     */
    public function setEncoded($encoded)
    {
        $this->values['encoded'] = $encoded;
        return $this;
    }

    /**
     * Get encoded
     *
     * @return boolean
     */
    public function getEncoded()
    {
        return $this->values['encoded'];
    }
}
