<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateCodCollectionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateCodCollectionType extends AbstractSimpleType
{

  const _ANY = 'ANY';
  const _CASH = 'CASH';
  const _COMPANY_CHECK = 'COMPANY_CHECK';
  const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
  const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}
