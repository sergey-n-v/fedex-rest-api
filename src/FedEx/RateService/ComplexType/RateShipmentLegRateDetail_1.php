<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateShipmentLegRateDetail_1
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property RateRateDiscount_1[] $discounts
 * @property string $pricingCode
 * @property string $legDescription
 * @property RateSurcharge_1[] $surcharges
 * @property string $specialRatingApplied
 * @property RateTax_1[] $taxes
 * @property string $rateScale
 * @property float $totalNetCharge
 * @property float $totalBaseCharge
 * @property RateCurrencyExchangeRate $currencyExchangeRate
 * @property RateWeight_1 $totalBillingWeight
 * @property string $currency

 */
class RateShipmentLegRateDetail_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateShipmentLegRateDetail_1';

    /**
     * Set discounts
     *
     * 
     * Example: 
     * @param RateRateDiscount_1[] $discounts
     * @return $this
     */
    public function setDiscounts(array $discounts)
    {
        $this->values['discounts'] = $discounts;
        return $this;
    }

    /**
     * Get discounts
     *
     * @return RateRateDiscount_1[]
     */
    public function getDiscounts()
    {
        return $this->values['discounts'];
    }

    /**
     * Set pricingCode
     *
     * 
     * Example: ACTUAL
     * @param string $pricingCode
     * @return $this
     */
    public function setPricingCode($pricingCode)
    {
        $this->values['pricingCode'] = $pricingCode;
        return $this;
    }

    /**
     * Get pricingCode
     *
     * @return string
     */
    public function getPricingCode()
    {
        return $this->values['pricingCode'];
    }

    /**
     * Set legDescription
     *
     * 
     * Example: legDescription
     * @param string $legDescription
     * @return $this
     */
    public function setLegDescription($legDescription)
    {
        $this->values['legDescription'] = $legDescription;
        return $this;
    }

    /**
     * Get legDescription
     *
     * @return string
     */
    public function getLegDescription()
    {
        return $this->values['legDescription'];
    }

    /**
     * Set surcharges
     *
     * 
     * Example: 
     * @param RateSurcharge_1[] $surcharges
     * @return $this
     */
    public function setSurcharges(array $surcharges)
    {
        $this->values['surcharges'] = $surcharges;
        return $this;
    }

    /**
     * Get surcharges
     *
     * @return RateSurcharge_1[]
     */
    public function getSurcharges()
    {
        return $this->values['surcharges'];
    }

    /**
     * Set specialRatingApplied
     *
     * 
     * Example: 
     * @param string $specialRatingApplied
     * @return $this
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->values['specialRatingApplied'] = $specialRatingApplied;
        return $this;
    }

    /**
     * Get specialRatingApplied
     *
     * @return string
     */
    public function getSpecialRatingApplied()
    {
        return $this->values['specialRatingApplied'];
    }

    /**
     * Set taxes
     *
     * 
     * Example: 
     * @param RateTax_1[] $taxes
     * @return $this
     */
    public function setTaxes(array $taxes)
    {
        $this->values['taxes'] = $taxes;
        return $this;
    }

    /**
     * Get taxes
     *
     * @return RateTax_1[]
     */
    public function getTaxes()
    {
        return $this->values['taxes'];
    }

    /**
     * Set rateScale
     *
     * 
     * Example: 
     * @param string $rateScale
     * @return $this
     */
    public function setRateScale($rateScale)
    {
        $this->values['rateScale'] = $rateScale;
        return $this;
    }

    /**
     * Get rateScale
     *
     * @return string
     */
    public function getRateScale()
    {
        return $this->values['rateScale'];
    }

    /**
     * Set totalNetCharge
     *
     * 
     * Example: 87.5
     * @param float $totalNetCharge
     * @return $this
     */
    public function setTotalNetCharge($totalNetCharge)
    {
        $this->values['totalNetCharge'] = $totalNetCharge;
        return $this;
    }

    /**
     * Get totalNetCharge
     *
     * @return float
     */
    public function getTotalNetCharge()
    {
        return $this->values['totalNetCharge'];
    }

    /**
     * Set totalBaseCharge
     *
     * 
     * Example: 87.5
     * @param float $totalBaseCharge
     * @return $this
     */
    public function setTotalBaseCharge($totalBaseCharge)
    {
        $this->values['totalBaseCharge'] = $totalBaseCharge;
        return $this;
    }

    /**
     * Get totalBaseCharge
     *
     * @return float
     */
    public function getTotalBaseCharge()
    {
        return $this->values['totalBaseCharge'];
    }

    /**
     * Set currencyExchangeRate
     *
     * 
     * Example: 
     * @param RateCurrencyExchangeRate $currencyExchangeRate
     * @return $this
     */
    public function setCurrencyExchangeRate(RateCurrencyExchangeRate $currencyExchangeRate)
    {
        $this->values['currencyExchangeRate'] = $currencyExchangeRate;
        return $this;
    }

    /**
     * Get currencyExchangeRate
     *
     * @return RateCurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
        return $this->values['currencyExchangeRate'];
    }

    /**
     * Set totalBillingWeight
     *
     * 
     * Example: 
     * @param RateWeight_1 $totalBillingWeight
     * @return $this
     */
    public function setTotalBillingWeight(RateWeight_1 $totalBillingWeight)
    {
        $this->values['totalBillingWeight'] = $totalBillingWeight;
        return $this;
    }

    /**
     * Get totalBillingWeight
     *
     * @return RateWeight_1
     */
    public function getTotalBillingWeight()
    {
        return $this->values['totalBillingWeight'];
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
