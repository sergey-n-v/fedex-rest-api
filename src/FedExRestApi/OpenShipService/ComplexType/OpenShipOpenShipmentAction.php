<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicate shipment action for the Shipment. <ul><li>CONFIRM &ndash; used in case of shipment submission</li><li>TRANSFER &ndash; used in case of Email Label Shipment or Pending Shipment submission.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class OpenShipOpenShipmentAction extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOpenShipmentAction';


}