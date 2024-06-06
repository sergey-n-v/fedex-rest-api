<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipChargeLevelType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipChargeLevelType extends AbstractSimpleType
{

  const _CURRENT_PACKAGE = 'CURRENT_PACKAGE';
  const _SUM_OF_PACKAGES = 'SUM_OF_PACKAGES';
}
