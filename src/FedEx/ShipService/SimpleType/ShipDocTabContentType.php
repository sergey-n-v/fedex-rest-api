<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipDocTabContentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipDocTabContentType extends AbstractSimpleType
{

  const _BARCODED = 'BARCODED';
  const _CUSTOM = 'CUSTOM';
  const _MINIMUM = 'MINIMUM';
  const _STANDARD = 'STANDARD';
  const _ZONE001 = 'ZONE001';
}
