<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the amount details. This is optional, but if indicated, amount and currency must be provided.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $amount
 * @property string $currency

 */
class RateMoney_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateMoney_1';

    /**
     * Set amount
     *
     * 
     * Example: 12.45
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
     * Set currency
     *
     * 
     * Example: USD
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->values['currency'] = $currency;
        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->values['currency'];
    }
}
