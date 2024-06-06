<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is Customs clearance data, used for both international and intra-country shipping and rating. Customs commodity data is required for international and intra-country rating.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateBrokerDetail[] $brokers
 * @property RateCommercialInvoice $commercialInvoice
 * @property string $freightOnValue
 * @property RatePayment $dutiesPayment
 * @property RateCommodity[] $commodities

 */
class RateCustomsClearanceDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCustomsClearanceDetail';

    /**
     * Set brokers
     *
     *
     * Example:
     * @param RateBrokerDetail[] $brokers
     * @return $this
     */
    public function setBrokers(array $brokers)
    {
        $this->values['brokers'] = $brokers;
        return $this;
    }

    /**
     * Get brokers
     *
     * @return RateBrokerDetail[]
     */
    public function getBrokers()
    {
        return $this->values['brokers'];
    }

    /**
     * Set commercialInvoice
     *
     *
     * Example:
     * @param RateCommercialInvoice $commercialInvoice
     * @return $this
     */
    public function setCommercialInvoice(RateCommercialInvoice $commercialInvoice)
    {
        $this->values['commercialInvoice'] = $commercialInvoice;
        return $this;
    }

    /**
     * Get commercialInvoice
     *
     * @return RateCommercialInvoice
     */
    public function getCommercialInvoice()
    {
        return $this->values['commercialInvoice'];
    }

    /**
     * Set freightOnValue
     *
     * simpleClass: RateFreightOnValue
     * Example: CARRIER_RISK
     * @param string $freightOnValue
     * @return $this
     */
    public function setFreightOnValue($freightOnValue)
    {
        $this->values['freightOnValue'] = $freightOnValue;
        return $this;
    }

    /**
     * Get freightOnValue
     *
     * @return string
     */
    public function getFreightOnValue()
    {
        return $this->values['freightOnValue'];
    }

    /**
     * Set dutiesPayment
     *
     *
     * Example:
     * @param RatePayment $dutiesPayment
     * @return $this
     */
    public function setDutiesPayment(RatePayment $dutiesPayment)
    {
        $this->values['dutiesPayment'] = $dutiesPayment;
        return $this;
    }

    /**
     * Get dutiesPayment
     *
     * @return RatePayment
     */
    public function getDutiesPayment()
    {
        return $this->values['dutiesPayment'];
    }

    /**
     * Set commodities
     *
     *
     * Example:
     * @param RateCommodity[] $commodities
     * @return $this
     */
    public function setCommodities(array $commodities)
    {
        $this->values['commodities'] = $commodities;
        return $this;
    }

    /**
     * Get commodities
     *
     * @return RateCommodity[]
     */
    public function getCommodities()
    {
        return $this->values['commodities'];
    }
}
