<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateChargeType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateChargeType extends AbstractSimpleType
{

  const _COD_SURCHARGE = 'COD_SURCHARGE';
  const _NET_CHARGE = 'NET_CHARGE';
  const _NET_FREIGHT = 'NET_FREIGHT';
  const _TOTAL_CUSTOMER_CHARGE = 'TOTAL_CUSTOMER_CHARGE';
}
