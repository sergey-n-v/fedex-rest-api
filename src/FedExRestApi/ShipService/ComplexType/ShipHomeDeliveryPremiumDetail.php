<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipPhoneNumber1 $phoneNumber
 * @property string $deliveryDate
 * @property string $homedeliveryPremiumType

 */
class ShipHomeDeliveryPremiumDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHomeDeliveryPremiumDetail';

    /**
     * Set phoneNumber
     *
     *
     * Example:
     * @param ShipPhoneNumber1 $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(ShipPhoneNumber1 $phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return ShipPhoneNumber1
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }

    /**
     * Set deliveryDate
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
     * Set homedeliveryPremiumType
     *
     * simpleClass: ShipHomedeliveryPremiumType
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
