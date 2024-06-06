<?php
namespace FedExRestApi\PickupService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * PickupPackageLocation
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupPackageLocation extends AbstractSimpleType
{

  const _FRONT = 'FRONT';
  const _NONE = 'NONE';
  const _REAR = 'REAR';
  const _SIDE = 'SIDE';
}
