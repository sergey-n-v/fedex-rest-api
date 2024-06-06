<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RatePacking
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RatePacking extends AbstractSimpleType
{

  const _CONTAINED_IN_EQUIPMENT = 'CONTAINED_IN_EQUIPMENT';
  const _PACKED_WITH_EQUIPMENT = 'PACKED_WITH_EQUIPMENT';
}
