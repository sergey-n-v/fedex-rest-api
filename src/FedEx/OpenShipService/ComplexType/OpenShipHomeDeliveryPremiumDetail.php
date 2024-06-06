<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipPhoneNumber1 $phoneNumber
 * @property string $deliveryDate
 * @property string $homedeliveryPremiumType

 */
class OpenShipHomeDeliveryPremiumDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHomeDeliveryPremiumDetail';

    /**
     * Set phoneNumber
     *
     * 
     * Example: 
     * @param OpenShipPhoneNumber1 $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(OpenShipPhoneNumber1 $phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return OpenShipPhoneNumber1
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }

    /**
     * This is delivery date. Required for FedEx Date Certain Home Delivery. Valid dates are Monday to Sunday. <br>There may be a delay in delivery on Sundays to locations that are geographically difficult to access.<br>Example: 2019-06-26
     *
     * 
     * Example: 2019-06-26
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->values['deliveryDate'] = $deliveryDate;
        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->values['deliveryDate'];
    }

    /**
     * This is Home Delivery Premium Type. It allows to specify additional premimum service options for the home delivery shipment. Can specify Evening delivery or a Date certain, or can specify appointment for the delivery.
     *
     * simpleClass: OpenShipHomedeliveryPremiumType
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
