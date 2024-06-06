<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipBatteryPackingType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipBatteryPackingType extends AbstractSimpleType
{

  const _CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
  const _PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
  const _UNKNOWN = 'UNKNOWN';
}
