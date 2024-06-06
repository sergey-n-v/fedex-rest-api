<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipChargeType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipChargeType extends AbstractSimpleType
{

  const _COD_SURCHARGE = 'COD_SURCHARGE';
  const _NET_CHARGE = 'NET_CHARGE';
  const _NET_FREIGHT = 'NET_FREIGHT';
  const _TOTAL_CUSTOMER_CHARGE = 'TOTAL_CUSTOMER_CHARGE';
}
