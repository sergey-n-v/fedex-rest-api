<?php
namespace FedExRestApi\PickupService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * PickupBuildingPart
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupBuildingPart extends AbstractSimpleType
{

  const _APARTMENT = 'APARTMENT';
  const _BUILDING = 'BUILDING';
  const _DEPARTMENT = 'DEPARTMENT';
  const _FLOOR = 'FLOOR';
  const _ROOM = 'ROOM';
  const _SUITE = 'SUITE';
}
