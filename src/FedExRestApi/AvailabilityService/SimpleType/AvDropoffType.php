<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvDropoffType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvDropoffType extends AbstractSimpleType
{

  const _REGULAR_PICKUP = 'REGULAR_PICKUP';
  const _REQUEST_COURIER = 'REQUEST_COURIER';
  const _DROP_BOX = 'DROP_BOX';
  const _BUSINESS_SERVICE_CENTER = 'BUSINESS_SERVICE_CENTER';
  const _STATION = 'STATION';
}
