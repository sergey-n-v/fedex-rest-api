<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are package rate details, as calculated per a specific rate type.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $ratedWeightMethod
 * @property float $totalFreightDiscounts
 * @property float $totalTaxes
 * @property string $minimumChargeType
 * @property float $baseCharge
 * @property float $totalRebates
 * @property string $rateType
 * @property ShipWeight $billingWeight
 * @property float $netFreight
 * @property ShipSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property float $netFedExCharge
 * @property float $netCharge
 * @property string $currency

 */
class ShipPackageRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageRateDetail';

    /**
     * Set ratedWeightMethod
     *
     * 
     * Example: DIM
     * @param string $ratedWeightMethod
     * @return $this
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->values['ratedWeightMethod'] = $ratedWeightMethod;
        return $this;
    }

    /**
     * Get ratedWeightMethod
     *
     * @return string
     */
    public function getRatedWeightMethod()
    {
        return $this->values['ratedWeightMethod'];
    }

    /**
     * Set totalFreightDiscounts
     *
     * 
     * Example: 44.55
     * @param float $totalFreightDiscounts
     * @return $this
     */
    public function setTotalFreightDiscounts($totalFreightDiscounts)
    {
        $this->values['totalFreightDiscounts'] = $totalFreightDiscounts;
        return $this;
    }

    /**
     * Get totalFreightDiscounts
     *
     * @return float
     */
    public function getTotalFreightDiscounts()
    {
        return $this->values['totalFreightDiscounts'];
    }

    /**
     * Set totalTaxes
     *
     * 
     * Example: 3.45
     * @param float $totalTaxes
     * @return $this
     */
    public function setTotalTaxes($totalTaxes)
    {
        $this->values['totalTaxes'] = $totalTaxes;
        return $this;
    }

    /**
     * Get totalTaxes
     *
     * @return float
     */
    public function getTotalTaxes()
    {
        return $this->values['totalTaxes'];
    }

    /**
     * Set minimumChargeType
     *
     * 
     * Example: CUSTOMER
     * @param string $minimumChargeType
     * @return $this
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->values['minimumChargeType'] = $minimumChargeType;
        return $this;
    }

    /**
     * Get minimumChargeType
     *
     * @return string
     */
    public function getMinimumChargeType()
    {
        return $this->values['minimumChargeType'];
    }

    /**
     * Set baseCharge
     *
     * 
     * Example: 45.67
     * @param float $baseCharge
     * @return $this
     */
    public function setBaseCharge($baseCharge)
    {
        $this->values['baseCharge'] = $baseCharge;
        return $this;
    }

    /**
     * Get baseCharge
     *
     * @return float
     */
    public function getBaseCharge()
    {
        return $this->values['baseCharge'];
    }

    /**
     * Set totalRebates
     *
     * 
     * Example: 4.56
     * @param float $totalRebates
     * @return $this
     */
    public function setTotalRebates($totalRebates)
    {
        $this->values['totalRebates'] = $totalRebates;
        return $this;
    }

    /**
     * Get totalRebates
     *
     * @return float
     */
    public function getTotalRebates()
    {
        return $this->values['totalRebates'];
    }

    /**
     * Set rateType
     *
     * 
     * Example: PAYOR_RETAIL_PACKAGE
     * @param string $rateType
     * @return $this
     */
    public function setRateType($rateType)
    {
        $this->values['rateType'] = $rateType;
        return $this;
    }

    /**
     * Get rateType
     *
     * @return string
     */
    public function getRateType()
    {
        return $this->values['rateType'];
    }

    /**
     * Set billingWeight
     *
     * 
     * Example: 
     * @param ShipWeight $billingWeight
     * @return $this
     */
    public function setBillingWeight(ShipWeight $billingWeight)
    {
        $this->values['billingWeight'] = $billingWeight;
        return $this;
    }

    /**
     * Get billingWeight
     *
     * @return ShipWeight
     */
    public function getBillingWeight()
    {
        return $this->values['billingWeight'];
    }

    /**
     * Set netFreight
     *
     * 
     * Example: 4.89
     * @param float $netFreight
     * @return $this
     */
    public function setNetFreight($netFreight)
    {
        $this->values['netFreight'] = $netFreight;
        return $this;
    }

    /**
     * Get netFreight
     *
     * @return float
     */
    public function getNetFreight()
    {
        return $this->values['netFreight'];
    }

    /**
     * Set surcharges
     *
     * 
     * Example: 
     * @param ShipSurcharge[] $surcharges
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
     * @return ShipSurcharge[]
     */
    public function getSurcharges()
    {
        return $this->values['surcharges'];
    }

    /**
     * Set totalSurcharges
     *
     * 
     * Example: 22.56
     * @param float $totalSurcharges
     * @return $this
     */
    public function setTotalSurcharges($totalSurcharges)
    {
        $this->values['totalSurcharges'] = $totalSurcharges;
        return $this;
    }

    /**
     * Get totalSurcharges
     *
     * @return float
     */
    public function getTotalSurcharges()
    {
        return $this->values['totalSurcharges'];
    }

    /**
     * Set netFedExCharge
     *
     * 
     * Example: 12.56
     * @param float $netFedExCharge
     * @return $this
     */
    public function setNetFedExCharge($netFedExCharge)
    {
        $this->values['netFedExCharge'] = $netFedExCharge;
        return $this;
    }

    /**
     * Get netFedExCharge
     *
     * @return float
     */
    public function getNetFedExCharge()
    {
        return $this->values['netFedExCharge'];
    }

    /**
     * Set netCharge
     *
     * 
     * Example: 121.56
     * @param float $netCharge
     * @return $this
     */
    public function setNetCharge($netCharge)
    {
        $this->values['netCharge'] = $netCharge;
        return $this;
    }

    /**
     * Get netCharge
     *
     * @return float
     */
    public function getNetCharge()
    {
        return $this->values['netCharge'];
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
