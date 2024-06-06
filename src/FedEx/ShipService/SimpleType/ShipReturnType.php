<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipReturnType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipReturnType extends AbstractSimpleType
{

  const _PENDING = 'PENDING';
  const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
}
