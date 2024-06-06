<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipTinType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipTinType extends AbstractSimpleType
{

  const _PERSONAL_NATIONAL = 'PERSONAL_NATIONAL';
  const _PERSONAL_STATE = 'PERSONAL_STATE';
  const _FEDERAL = 'FEDERAL';
  const _BUSINESS_NATIONAL = 'BUSINESS_NATIONAL';
  const _BUSINESS_STATE = 'BUSINESS_STATE';
  const _BUSINESS_UNION = 'BUSINESS_UNION';
}
