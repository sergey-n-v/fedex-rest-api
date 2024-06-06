<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipRateRequestType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipRateRequestType extends AbstractSimpleType
{

  const _LIST = 'LIST';
  const _NONE = 'NONE';
  const _INCENTIVE = 'INCENTIVE';
  const _ACCOUNT = 'ACCOUNT';
  const _PREFERRED = 'PREFERRED';
  const _RETAIL = 'RETAIL';
}
