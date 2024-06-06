<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $homedeliveryPremiumType

 */
class AvHomeDeliveryPremiumDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvHomeDeliveryPremiumDetail';

    /**
     * This is Home Delivery Premium Type. It allows to specify additional premium service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * simpleClass: AvHomedeliveryPremiumType
     * Example: APPOINTMENT
     * @param string $homedeliveryPremiumType
     * @return $this
     */
    public function setHomedeliveryPremiumType($homedeliveryPremiumType)
    {
        $this->values['homedeliveryPremiumType'] = $homedeliveryPremiumType;
        return $this;
    }

    /**
     * Get homedeliveryPremiumType
     *
     * @return string
     */
    public function getHomedeliveryPremiumType()
    {
        return $this->values['homedeliveryPremiumType'];
    }
}
