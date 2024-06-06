<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipRateLevelType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipRateLevelType extends AbstractSimpleType
{

  const _BUNDLED_RATE = 'BUNDLED_RATE';
  const _INDIVIDUAL_PACKAGE_RATE = 'INDIVIDUAL_PACKAGE_RATE';
}
