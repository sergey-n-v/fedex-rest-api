<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipStatementTypes
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipStatementTypes extends AbstractSimpleType
{

  const _DEPARTMENT_OF_COMMERCE = 'DEPARTMENT_OF_COMMERCE';
  const _DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_STATE';
  const _DEPARTMENT_OF_COMMERCE_AND_DEPARTMENT_OF_STATE = 'DEPARTMENT_OF_COMMERCE_AND_DEPARTMENT_OF_STATE';
}
