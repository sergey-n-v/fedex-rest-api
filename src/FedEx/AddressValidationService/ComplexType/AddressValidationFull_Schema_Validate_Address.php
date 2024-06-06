<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The request elements for address resolution.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $inEffectAsOfTimestamp
 * @property AddressValidationAddressResolutionControlParameters $validateAddressControlParameters
 * @property AddressValidationResolveContactAndAddress[] $addressesToValidate

 */
class AddressValidationFull_Schema_Validate_Address extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationFull_Schema_Validate_Address';

    /**
     * This can be used to request the characteristics of an address had at a particular time in history. This defaults to current date time (of the Address Validation System). This is useful because the AddressValidation database is dynamic and stores historical data. Characteristics such as Business/Residential indicator may change over time.<br> Example: 2019-09-06
     *
     * 
     * Example: 2019-09-06
     * @param string $inEffectAsOfTimestamp
     * @return $this
     */
    public function setInEffectAsOfTimestamp($inEffectAsOfTimestamp)
    {
        $this->values['inEffectAsOfTimestamp'] = $inEffectAsOfTimestamp;
        return $this;
    }

    /**
     * Get inEffectAsOfTimestamp
     *
     * @return string
     */
    public function getInEffectAsOfTimestamp()
    {
        return $this->values['inEffectAsOfTimestamp'];
    }

    /**
     * Set validateAddressControlParameters
     *
     * 
     * Example: 
     * @param AddressValidationAddressResolutionControlParameters $validateAddressControlParameters
     * @return $this
     */
    public function setValidateAddressControlParameters(AddressValidationAddressResolutionControlParameters $validateAddressControlParameters)
    {
        $this->values['validateAddressControlParameters'] = $validateAddressControlParameters;
        return $this;
    }

    /**
     * Get validateAddressControlParameters
     *
     * @return AddressValidationAddressResolutionControlParameters
     */
    public function getValidateAddressControlParameters()
    {
        return $this->values['validateAddressControlParameters'];
    }

    /**
     * Indicate the address to be validated and resolved. This includes the address details, such as streetline, state or province code, country code and postal code. <br><br><i>Note: Up to 100 of these can be submitted in a single request.</i>
     *
     * 
     * Example: 
     * @param AddressValidationResolveContactAndAddress[] $addressesToValidate
     * @return $this
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->values['addressesToValidate'] = $addressesToValidate;
        return $this;
    }

    /**
     * Get addressesToValidate
     *
     * @return AddressValidationResolveContactAndAddress[]
     */
    public function getAddressesToValidate()
    {
        return $this->values['addressesToValidate'];
    }
}
