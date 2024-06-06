<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
class ShipCurrencyExchangeRate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCurrencyExchangeRate';

    /**
     * Set rate
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
     * Set fromCurrency
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
     * Set intoCurrency
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
