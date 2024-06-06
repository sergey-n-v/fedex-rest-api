<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupPickupDateType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupPickupDateType extends AbstractSimpleType
{

  const _SAME_DAY = 'SAME_DAY';
  const _FUTURE_DAY = 'FUTURE_DAY';
}
