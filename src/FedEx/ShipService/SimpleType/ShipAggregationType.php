<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipAggregationType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipAggregationType extends AbstractSimpleType
{

  const _PER_PACKAGE = 'PER_PACKAGE';
  const _PER_SHIPMENT = 'PER_SHIPMENT';
}
