<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Returns messages pertaining to the resolved address indicating if any additional information is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class AddressValidationCustomerMessage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationCustomerMessage';


}
