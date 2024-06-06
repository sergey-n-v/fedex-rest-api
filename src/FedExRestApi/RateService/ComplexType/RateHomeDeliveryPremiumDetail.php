<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are Special service elements for FedEx Ground Home Delivery shipments. If selected, element homedeliveryPremiumType is mandatory.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateParty_PhoneNumber $phoneNumber
 * @property string $shipTimestamp
 * @property string $homedeliveryPremiumType

 */
class RateHomeDeliveryPremiumDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHomeDeliveryPremiumDetail';

    /**
     * Set phoneNumber
     *
     *
     * Example:
     * @param RateParty_PhoneNumber $phoneNumber
     * @return $this
     */
    public function setPhoneNumber(RateParty_PhoneNumber $phoneNumber)
    {
        $this->values['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return RateParty_PhoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->values['phoneNumber'];
    }

    /**
     * Set shipTimestamp
     *
     *
     * Example: 2020-04-24
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
     * Set homedeliveryPremiumType
     *
     * simpleClass: RateHomedeliveryPremiumType
     * Example:
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
