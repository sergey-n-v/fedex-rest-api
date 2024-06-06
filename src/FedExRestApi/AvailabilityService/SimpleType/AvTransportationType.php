<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvTransportationType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvTransportationType extends AbstractSimpleType
{

  const _DELIVERY = 'DELIVERY';
  const _PICKUP = 'PICKUP';
}
