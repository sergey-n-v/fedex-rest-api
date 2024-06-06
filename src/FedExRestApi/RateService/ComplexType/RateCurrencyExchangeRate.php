<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies the currency exchange performed on financial amounts for this rate.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $fromCurrency
 * @property string $intoCurrency
 * @property float $rate

 */
class RateCurrencyExchangeRate extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCurrencyExchangeRate';

    /**
     * Set fromCurrency
     *
     *
     * Example: USD
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

    /**
     * Set rate
     *
     *
     * Example: 87.5
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
}
