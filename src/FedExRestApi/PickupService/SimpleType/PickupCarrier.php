<?php
namespace FedExRestApi\PickupService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * PickupCarrier
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupCarrier extends AbstractSimpleType
{

  const _FDXE = 'FDXE';
  const _FDXG = 'FDXG';
  const _FXSP = 'FXSP';
  const _FXFR = 'FXFR';
}
