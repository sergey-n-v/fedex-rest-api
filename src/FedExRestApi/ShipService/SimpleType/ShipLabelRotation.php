<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipLabelRotation
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipLabelRotation extends AbstractSimpleType
{

  const _LEFT = 'LEFT';
  const _RIGHT = 'RIGHT';
  const _UPSIDE_DOWN = 'UPSIDE_DOWN';
  const _NONE = 'NONE';
}
