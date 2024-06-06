<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the optional actions that can be performed during the modification of packages in  Open Shipment.<p>Here are the values:<ul><li>CREATE_PACKAGE - Use CREATE_PACKAGE option to create Open Shipment.</li><li>STRONG_VALIDATION – Full shipment edits: any edit that fails will cause the transaction to fail. If the transaction is successful, a tracking number may be returned and the transaction will be saved to the database (committed).</li><li>WEAK_VALIDATION - Full shipment edits: any edit that fails will return errors but the transaction does not fail. The tracking number is returned and the transaction is saved in the database if the core edits are passed. Fix errors with the ModifyRequests transaction using the Index and returned tracking number.</li></ul></p>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class OpenShipOpenShipAction extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipOpenShipAction';


}