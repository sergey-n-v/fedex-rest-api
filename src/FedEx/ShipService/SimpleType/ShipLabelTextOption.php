<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipLabelTextOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipLabelTextOption extends AbstractSimpleType
{

  const _APPEND = 'APPEND';
  const _OVERRIDE = 'OVERRIDE';
  const _STANDARD = 'STANDARD';
}
