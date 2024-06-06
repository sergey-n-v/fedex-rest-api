<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the parameters applied to validate the address.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $includeResolutionTokens

 */
class AddressValidationAddressResolutionControlParameters extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationAddressResolutionControlParameters';

    /**
     * Use this to request detailed information of the address components once the validation is complete. The details specify the changes made to each address component to resolve the address.
     *
     *
     * Example: 1
     * @param boolean $includeResolutionTokens
     * @return $this
     */
    public function setIncludeResolutionTokens($includeResolutionTokens)
    {
        $this->values['includeResolutionTokens'] = $includeResolutionTokens;
        return $this;
    }

    /**
     * Get includeResolutionTokens
     *
     * @return boolean
     */
    public function getIncludeResolutionTokens()
    {
        return $this->values['includeResolutionTokens'];
    }
}
