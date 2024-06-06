<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipRateElementBasis
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipRateElementBasis extends AbstractSimpleType
{

  const _NET_CHARGE = 'NET_CHARGE';
  const _NET_FREIGHT = 'NET_FREIGHT';
  const _BASE_CHARGE = 'BASE_CHARGE';
  const _NET_CHARGE_EXCLUDING_TAXES = 'NET_CHARGE_EXCLUDING_TAXES';
}
