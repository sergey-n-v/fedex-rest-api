<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The variable handling charge amount calculated based on the requested variable handling charge detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $totalCustomerCharge
 * @property float $variableHandlingCharge

 */
class RateVariableHandlingCharges extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateVariableHandlingCharges';

    /**
     * Set totalCustomerCharge
     *
     * 
     * Example: 445.54
     * @param float $totalCustomerCharge
     * @return $this
     */
    public function setTotalCustomerCharge($totalCustomerCharge)
    {
        $this->values['totalCustomerCharge'] = $totalCustomerCharge;
        return $this;
    }

    /**
     * Get totalCustomerCharge
     *
     * @return float
     */
    public function getTotalCustomerCharge()
    {
        return $this->values['totalCustomerCharge'];
    }

    /**
     * Set variableHandlingCharge
     *
     * 
     * Example: 403.2
     * @param float $variableHandlingCharge
     * @return $this
     */
    public function setVariableHandlingCharge($variableHandlingCharge)
    {
        $this->values['variableHandlingCharge'] = $variableHandlingCharge;
        return $this;
    }

    /**
     * Get variableHandlingCharge
     *
     * @return float
     */
    public function getVariableHandlingCharge()
    {
        return $this->values['variableHandlingCharge'];
    }
}
