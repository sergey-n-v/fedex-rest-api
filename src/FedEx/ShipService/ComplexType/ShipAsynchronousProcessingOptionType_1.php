<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the processing option for submitting a Single shot MPS shipment. The value indicates if the MPS to be processed synchronously or asynchronously.<br>Note: <ul><li>Default value is SYNCHRONOUS_ONLY.</li><li>Value or element is not needed when groupPackageCount is less than or equal to 40.</li><li>Must provide element with value ALLOW_ASYNCHRONOUS when groupPackageCount is greater than 40.</li></ul>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class ShipAsynchronousProcessingOptionType_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipAsynchronousProcessingOptionType_1';


}
