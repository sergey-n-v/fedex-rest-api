<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvBatteryPackingType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvBatteryPackingType extends AbstractSimpleType
{

  const _CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
  const _PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
}
