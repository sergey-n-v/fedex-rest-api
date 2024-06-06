<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipBatteryPackingType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipBatteryPackingType extends AbstractSimpleType
{

  const _CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
  const _PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
}
