<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateRatedWeightMethod
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRatedWeightMethod extends AbstractSimpleType
{

  const _ACTUAL = 'ACTUAL';
  const _AVERAGE_PACKAGE_WEIGHT_MINIMUM = 'AVERAGE_PACKAGE_WEIGHT_MINIMUM';
  const _DEFAULT_WEIGHT_APPLIED = 'DEFAULT_WEIGHT_APPLIED';
  const _BALLOON = 'BALLOON';
  const _DIM = 'DIM';
  const _FREIGHT_MINIMUM = 'FREIGHT_MINIMUM';
  const _MIXED = 'MIXED';
  const _OVERSIZE = 'OVERSIZE';
  const _OVERSIZE_1 = 'OVERSIZE_1';
  const _OVERSIZE_2 = 'OVERSIZE_2';
  const _OVERSIZE_3 = 'OVERSIZE_3';
  const _PACKAGING_MINIMUM = 'PACKAGING_MINIMUM';
  const _WEIGHT_BREAK = 'WEIGHT_BREAK';
}