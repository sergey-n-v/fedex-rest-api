<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the currency exchange performed on financial amounts on this rate.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $rate
 * @property string $fromCurrency
 * @property string $intoCurrency

 */
class OpenShipCurrencyExchangeRate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCurrencyExchangeRate';

    /**
     * Multiplier used to convert from Currency units to into Currency units.<br>Example: 25.6
     *
     * 
     * Example: 25.6
     * @param float $rate
     * @return $this
     */
    public function setRate($rate)
    {
        $this->values['rate'] = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->values['rate'];
    }

    /**
     * The currency code for the original (converted FROM) currency.<br>Example: Rupee<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * 
     * Example: Rupee
     * @param string $fromCurrency
     * @return $this
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->values['fromCurrency'] = $fromCurrency;
        return $this;
    }

    /**
     * Get fromCurrency
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->values['fromCurrency'];
    }

    /**
     * The currency code for the final(converted INTO) currency.<br>Example: USD<br><a onclick='loadDocReference("currencycodes")'>click here to see Currency codes</a>
     *
     * 
     * Example: USD
     * @param string $intoCurrency
     * @return $this
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->values['intoCurrency'] = $intoCurrency;
        return $this;
    }

    /**
     * Get intoCurrency
     *
     * @return string
     */
    public function getIntoCurrency()
    {
        return $this->values['intoCurrency'];
    }
}
