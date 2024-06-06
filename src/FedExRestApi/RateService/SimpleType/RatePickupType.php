<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RatePickupType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RatePickupType extends AbstractSimpleType
{

  const _CONTACT_FEDEX_TO_SCHEDULE = 'CONTACT_FEDEX_TO_SCHEDULE';
  const _DROPOFF_AT_FEDEX_LOCATION = 'DROPOFF_AT_FEDEX_LOCATION';
  const _USE_SCHEDULED_PICKUP = 'USE_SCHEDULED_PICKUP';
}
