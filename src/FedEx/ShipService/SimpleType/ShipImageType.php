<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipImageType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipImageType extends AbstractSimpleType
{

  const _ZPLII = 'ZPLII';
  const _EPL2 = 'EPL2';
  const _PDF = 'PDF';
  const _PNG = 'PNG';
}
