<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvPickupType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvPickupType extends AbstractSimpleType
{

  const _CONTACT_FEDEX_TO_SCHEDULE = 'CONTACT_FEDEX_TO_SCHEDULE';
  const _DROPOFF_AT_FEDEX_LOCATION = 'DROPOFF_AT_FEDEX_LOCATION';
  const _USE_SCHEDULED_PICKUP = 'USE_SCHEDULED_PICKUP';
}
