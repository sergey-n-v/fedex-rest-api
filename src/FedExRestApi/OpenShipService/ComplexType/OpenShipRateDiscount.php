<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies discount Rate for Shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $amount
 * @property string $rateDiscountType
 * @property float $percent
 * @property string $description

 */
class OpenShipRateDiscount extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRateDiscount';

    /**
     * Specifies the amount.<br>Example: 8.9
     *
     *
     * Example: 8.9
     * @param float $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->values['amount'] = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->values['amount'];
    }

    /**
     * The type of rate discount. <br/> Valid Values are BONUS, COUPON,EARNED,OTHER,VOLUME.<br>Example: COUPON
     *
     *
     * Example: COUPON
     * @param string $rateDiscountType
     * @return $this
     */
    public function setRateDiscountType($rateDiscountType)
    {
        $this->values['rateDiscountType'] = $rateDiscountType;
        return $this;
    }

    /**
     * Get rateDiscountType
     *
     * @return string
     */
    public function getRateDiscountType()
    {
        return $this->values['rateDiscountType'];
    }

    /**
     * Specifies the percentage of Rate discount.<br>Example: 28.9
     *
     *
     * Example: 28.9
     * @param float $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->values['percent'] = $percent;
        return $this;
    }

    /**
     * Get percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->values['percent'];
    }

    /**
     * Specifies the description of the discounted rate.<br>Example: description
     *
     *
     * Example: description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }
}
