<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRateSortOrder
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRateSortOrder extends AbstractSimpleType
{

  const _COMMITASCENDING = 'COMMITASCENDING';
  const _SERVICENAMETRADITIONAL = 'SERVICENAMETRADITIONAL';
  const _COMMITDESCENDING = 'COMMITDESCENDING';
}
