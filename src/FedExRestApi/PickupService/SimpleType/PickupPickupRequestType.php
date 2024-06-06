<?php
namespace FedExRestApi\PickupService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * PickupPickupRequestType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupPickupRequestType extends AbstractSimpleType
{

  const _SAME_DAY = 'SAME_DAY';
  const _FUTURE_DAY = 'FUTURE_DAY';
}
