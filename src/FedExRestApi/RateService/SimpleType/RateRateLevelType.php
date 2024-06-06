<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateRateLevelType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRateLevelType extends AbstractSimpleType
{

  const _BUNDLED_RATE = 'BUNDLED_RATE';
  const _INDIVIDUAL_PACKAGE_RATE = 'INDIVIDUAL_PACKAGE_RATE';
}
