<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipMinimumChargeType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipMinimumChargeType extends AbstractSimpleType
{

  const _CUSTOMER = 'CUSTOMER';
  const _CUSTOMER_FREIGHT_WEIGHT = 'CUSTOMER_FREIGHT_WEIGHT';
  const _EARNED_DISCOUNT = 'EARNED_DISCOUNT';
  const _MIXED = 'MIXED';
  const _RATE_SCALE = 'RATE_SCALE';
}
