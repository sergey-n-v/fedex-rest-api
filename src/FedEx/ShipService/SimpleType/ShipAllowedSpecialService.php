<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipAllowedSpecialService
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipAllowedSpecialService extends AbstractSimpleType
{

  const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
  const _SATURDAY_PICKUP = 'SATURDAY_PICKUP';
}
