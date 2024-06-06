<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the return transit times, services needed on rate failure, choice of variable option and order to sort rate options to filter and sort the expected response.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $returnTransitTimes
 * @property boolean $servicesNeededOnRateFailure
 * @property string $variableOptions
 * @property string $rateSortOrder

 */
class RateRateRequestControlParameters extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRateRequestControlParameters';

    /**
     * Set returnTransitTimes
     *
     * 
     * 
     * @param boolean $returnTransitTimes
     * @return $this
     */
    public function setReturnTransitTimes($returnTransitTimes)
    {
        $this->values['returnTransitTimes'] = $returnTransitTimes;
        return $this;
    }

    /**
     * Get returnTransitTimes
     *
     * @return boolean
     */
    public function getReturnTransitTimes()
    {
        return $this->values['returnTransitTimes'];
    }

    /**
     * Set servicesNeededOnRateFailure
     *
     * 
     * Example: 1
     * @param boolean $servicesNeededOnRateFailure
     * @return $this
     */
    public function setServicesNeededOnRateFailure($servicesNeededOnRateFailure)
    {
        $this->values['servicesNeededOnRateFailure'] = $servicesNeededOnRateFailure;
        return $this;
    }

    /**
     * Get servicesNeededOnRateFailure
     *
     * @return boolean
     */
    public function getServicesNeededOnRateFailure()
    {
        return $this->values['servicesNeededOnRateFailure'];
    }

    /**
     * Set variableOptions
     *
     * simpleClass: RateVariableOptions
     * Example: FREIGHT_GUARANTEE
     * @param string $variableOptions
     * @return $this
     */
    public function setVariableOptions($variableOptions)
    {
        $this->values['variableOptions'] = $variableOptions;
        return $this;
    }

    /**
     * Get variableOptions
     *
     * @return string
     */
    public function getVariableOptions()
    {
        return $this->values['variableOptions'];
    }

    /**
     * Set rateSortOrder
     *
     * simpleClass: RateRateSortOrder
     * Example: SERVICENAMETRADITIONAL
     * @param string $rateSortOrder
     * @return $this
     */
    public function setRateSortOrder($rateSortOrder)
    {
        $this->values['rateSortOrder'] = $rateSortOrder;
        return $this;
    }

    /**
     * Get rateSortOrder
     *
     * @return string
     */
    public function getRateSortOrder()
    {
        return $this->values['rateSortOrder'];
    }
}
