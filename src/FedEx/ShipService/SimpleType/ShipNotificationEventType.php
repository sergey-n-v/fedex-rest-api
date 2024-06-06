<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipNotificationEventType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipNotificationEventType extends AbstractSimpleType
{

  const _ON_DELIVERY = 'ON_DELIVERY';
  const _ON_EXCEPTION = 'ON_EXCEPTION';
  const _ON_SHIPMENT = 'ON_SHIPMENT';
  const _ON_TENDER = 'ON_TENDER';
  const _ON_ESTIMATED_DELIVERY = 'ON_ESTIMATED_DELIVERY';
  const _ON_PICKUP_DRIVER_ARRIVED = 'ON_PICKUP_DRIVER_ARRIVED';
  const _ON_PICKUP_DRIVER_ASSIGNED = 'ON_PICKUP_DRIVER_ASSIGNED';
  const _ON_PICKUP_DRIVER_DEPARTED = 'ON_PICKUP_DRIVER_DEPARTED';
  const _ON_PICKUP_DRIVER_EN_ROUTE = 'ON_PICKUP_DRIVER_EN_ROUTE';
}
