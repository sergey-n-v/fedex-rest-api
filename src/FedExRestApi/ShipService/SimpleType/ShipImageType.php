<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

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
