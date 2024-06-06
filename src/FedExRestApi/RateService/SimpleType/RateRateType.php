<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateRateType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRateType extends AbstractSimpleType
{

  const _ACCOUNT = 'ACCOUNT';
  const _ACTUAL = 'ACTUAL';
  const _CURRENT = 'CURRENT';
  const _CUSTOM = 'CUSTOM';
  const _LIST = 'LIST';
  const _INCENTIVE = 'INCENTIVE';
  const _PREFERRED = 'PREFERRED';
  const _PREFERRED_INCENTIVE = 'PREFERRED_INCENTIVE';
  const _PREFERRED_CURRENCY = 'PREFERRED_CURRENCY';
}
