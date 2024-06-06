<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Data for a package's rates, as calculated per a specific rate type.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $ratedWeightMethod
 * @property float $totalTaxes
 * @property float $totalFreightDiscounts
 * @property float $baseCharge
 * @property float $totalRebates
 * @property string $rateType
 * @property RateWeight $billingWeight
 * @property float $netFreight
 * @property RateSurcharge[] $surcharges
 * @property float $totalSurcharges
 * @property float $netFedExCharge
 * @property float $netCharge
 * @property RateRateDiscount[] $freightDiscounts

 */
class RatePackageRateDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RatePackageRateDetail';

    /**
     * Set ratedWeightMethod
     *
     *
     * Example: dimensional
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
     * Set totalTaxes
     *
     *
     * Example: 1257.25
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
     * Set totalFreightDiscounts
     *
     *
     * Example: 1257.26
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
     * Set baseCharge
     *
     *
     * Example: 125
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
     * Example: 12
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
     * Example:
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
     * @param RateWeight $billingWeight
     * @return $this
     */
    public function setBillingWeight(RateWeight $billingWeight)
    {
        $this->values['billingWeight'] = $billingWeight;
        return $this;
    }

    /**
     * Get billingWeight
     *
     * @return RateWeight
     */
    public function getBillingWeight()
    {
        return $this->values['billingWeight'];
    }

    /**
     * Set netFreight
     *
     *
     * Example: 10
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
     * @param RateSurcharge[] $surcharges
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
     * @return RateSurcharge[]
     */
    public function getSurcharges()
    {
        return $this->values['surcharges'];
    }

    /**
     * Set totalSurcharges
     *
     *
     * Example: 569
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
     * Example: 125.32
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
     * Example: 563
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
     * Set freightDiscounts
     *
     *
     * Example:
     * @param RateRateDiscount[] $freightDiscounts
     * @return $this
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->values['freightDiscounts'] = $freightDiscounts;
        return $this;
    }

    /**
     * Get freightDiscounts
     *
     * @return RateRateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->values['freightDiscounts'];
    }
}
