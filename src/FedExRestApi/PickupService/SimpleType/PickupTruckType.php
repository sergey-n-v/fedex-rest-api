<?php
namespace FedExRestApi\PickupService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * PickupTruckType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupTruckType extends AbstractSimpleType
{

  const _DROP_TRAILER_AGREEMENT = 'DROP_TRAILER_AGREEMENT';
  const _LIFTGATE = 'LIFTGATE';
  const _TRACTOR_TRAILER_ACCESS = 'TRACTOR_TRAILER_ACCESS';
}
