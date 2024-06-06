<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Optional, but if indicated 'amount' and 'currency' must be provided.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $amount
 * @property string $currency

 */
class AvMoney extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvMoney';

    /**
     * This is the amount. Max length 18 including decimal.<br>Example: 12.45
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
     * This is the currency code for the amount.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>Click here to see Currency Codes</a>
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
