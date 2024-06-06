<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateNotificationEventType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateNotificationEventType extends AbstractSimpleType
{

  const _ON_DELIVERY = 'ON_DELIVERY';
  const _ON_EXCEPTION = 'ON_EXCEPTION';
  const _ON_SHIPMENT = 'ON_SHIPMENT';
  const _ON_TENDER = 'ON_TENDER';
  const _ON_ESTIMATED_DELIVERY = 'ON_ESTIMATED_DELIVERY';
  const _ON_PICKUP = 'ON_PICKUP';
  const _ON_LABEL = 'ON_LABEL';
  const _ON_BILL_OF_LADING = 'ON_BILL_OF_LADING';
}
