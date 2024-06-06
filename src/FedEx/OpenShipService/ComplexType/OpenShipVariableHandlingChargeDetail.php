<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the details about how to calculate variable handling charges at the shipment level. They can be based on a percentage of the shipping charges or a fixed amount. If indicated, element rateLevelType is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $rateType
 * @property float $percentValue
 * @property string $rateLevelType
 * @property OpenShipMoney $fixedValue
 * @property string $rateElementBasis

 */
class OpenShipVariableHandlingChargeDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipVariableHandlingChargeDetail';

    /**
     * The rate type indicates what type of rate request is being returned; account, preferred, incentive, etc
     *
     * simpleClass: OpenShipRateType
     * Example: PREFERRED_CURRENCY
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
     * This is the variable handling percentage. If the percent value is mentioned as 10, it means 10%(multiplier of 0.1).<br>Example: 12.45
     *
     * 
     * Example: 12.45
     * @param float $percentValue
     * @return $this
     */
    public function setPercentValue($percentValue)
    {
        $this->values['percentValue'] = $percentValue;
        return $this;
    }

    /**
     * Get percentValue
     *
     * @return float
     */
    public function getPercentValue()
    {
        return $this->values['percentValue'];
    }

    /**
     * indicates whether or not the rating is being done at the package level, or if the packages are bundled together. At the package level, charges are applied based on the details of each individual package. If they are bundled, one package is chosen as the parent and charges are applied based on that one package.
     *
     * simpleClass: OpenShipRateLevelType
     * Example: INDIVIDUAL_PACKAGE_RATE
     * @param string $rateLevelType
     * @return $this
     */
    public function setRateLevelType($rateLevelType)
    {
        $this->values['rateLevelType'] = $rateLevelType;
        return $this;
    }

    /**
     * Get rateLevelType
     *
     * @return string
     */
    public function getRateLevelType()
    {
        return $this->values['rateLevelType'];
    }

    /**
     * This is to specify a fixed handling charge on the shipment. The element allows entry of 7 characters before the decimal and 2 characters following the decimal. <br>Example: 5.00.
     *
     * 
     * Example: 
     * @param OpenShipMoney|OpenShipFixedValue $fixedValue
     * @return $this
     */
    public function setFixedValue($fixedValue)
    {
        $this->values['fixedValue'] = $fixedValue;
        return $this;
    }

    /**
     * Get fixedValue
     *
     * @return OpenShipMoney|OpenShipFixedValue
     */
    public function getFixedValue()
    {
        return $this->values['fixedValue'];
    }

    /**
     * Specify the charge type upon which the variable handling percentage amount is calculated.
     *
     * simpleClass: OpenShipRateElementBasis
     * Example: NET_CHARGE_EXCLUDING_TAXES
     * @param string $rateElementBasis
     * @return $this
     */
    public function setRateElementBasis($rateElementBasis)
    {
        $this->values['rateElementBasis'] = $rateElementBasis;
        return $this;
    }

    /**
     * Get rateElementBasis
     *
     * @return string
     */
    public function getRateElementBasis()
    {
        return $this->values['rateElementBasis'];
    }
}
