<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipRateRequestType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipRateRequestType extends AbstractSimpleType
{

  const _LIST = 'LIST';
  const _NONE = 'NONE';
  const _PREFERRED = 'PREFERRED';
  const _ACCOUNT = 'ACCOUNT';
  const _INCENTIVE = 'INCENTIVE';
  const _RETAIL = 'RETAIL';
}
