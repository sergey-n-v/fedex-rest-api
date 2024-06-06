<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The input details required to cancel a tag.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipShipmentAccountNumber $accountNumber
 * @property string $serviceType
 * @property string $trackingNumber
 * @property ShipCompletedTagDetail_2 $completedTagDetail

 */
class ShipFullSchema_CancelTag extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFullSchema_CancelTag';

    /**
     * Set accountNumber
     *
     * 
     * Example: 
     * @param ShipShipmentAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipShipmentAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipShipmentAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set serviceType
     *
     * 
     * Example: PRIORITY_OVERNIGHT
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
     * Set trackingNumber
     *
     * 
     * Example: 301025281523
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->values['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Get trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->values['trackingNumber'];
    }

    /**
     * Set completedTagDetail
     *
     * 
     * Example: 
     * @param ShipCompletedTagDetail_2 $completedTagDetail
     * @return $this
     */
    public function setCompletedTagDetail(ShipCompletedTagDetail_2 $completedTagDetail)
    {
        $this->values['completedTagDetail'] = $completedTagDetail;
        return $this;
    }

    /**
     * Get completedTagDetail
     *
     * @return ShipCompletedTagDetail_2
     */
    public function getCompletedTagDetail()
    {
        return $this->values['completedTagDetail'];
    }
}
