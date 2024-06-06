<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the output details when a tag is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $masterTrackingNumber
 * @property string $serviceType
 * @property string $shipTimestamp
 * @property ShipCompletedTagDetail $completedTagDetail
 * @property ShipAlert[] $alerts

 */
class ShipCreateTagOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCreateTagOutputVO';

    /**
     * Set masterTrackingNumber
     *
     * 
     * Example: 997338100007320
     * @param string $masterTrackingNumber
     * @return $this
     */
    public function setMasterTrackingNumber($masterTrackingNumber)
    {
        $this->values['masterTrackingNumber'] = $masterTrackingNumber;
        return $this;
    }

    /**
     * Get masterTrackingNumber
     *
     * @return string
     */
    public function getMasterTrackingNumber()
    {
        return $this->values['masterTrackingNumber'];
    }

    /**
     * Set serviceType
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
     * Set shipTimestamp
     *
     * 
     * Example: 2019-10-04
     * @param string $shipTimestamp
     * @return $this
     */
    public function setShipTimestamp($shipTimestamp)
    {
        $this->values['shipTimestamp'] = $shipTimestamp;
        return $this;
    }

    /**
     * Get shipTimestamp
     *
     * @return string
     */
    public function getShipTimestamp()
    {
        return $this->values['shipTimestamp'];
    }

    /**
     * Set completedTagDetail
     *
     * 
     * Example: 
     * @param ShipCompletedTagDetail $completedTagDetail
     * @return $this
     */
    public function setCompletedTagDetail(ShipCompletedTagDetail $completedTagDetail)
    {
        $this->values['completedTagDetail'] = $completedTagDetail;
        return $this;
    }

    /**
     * Get completedTagDetail
     *
     * @return ShipCompletedTagDetail
     */
    public function getCompletedTagDetail()
    {
        return $this->values['completedTagDetail'];
    }

    /**
     * Set alerts
     *
     * 
     * Example: 
     * @param ShipAlert[] $alerts
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
     * @return ShipAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
