<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvRateTypeBasis
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvRateTypeBasis extends AbstractSimpleType
{

  const _ACCOUNT = 'ACCOUNT';
  const _ACTUAL = 'ACTUAL';
  const _CURRENT = 'CURRENT';
  const _CUSTOM = 'CUSTOM';
  const _LIST = 'LIST';
}
