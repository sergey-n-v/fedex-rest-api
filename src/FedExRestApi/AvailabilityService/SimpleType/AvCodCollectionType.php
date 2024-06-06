<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvCodCollectionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvCodCollectionType extends AbstractSimpleType
{

  const _COMPANY_CHECK = 'COMPANY_CHECK';
  const _ANY = 'ANY';
  const _CASH = 'CASH';
  const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
  const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}
