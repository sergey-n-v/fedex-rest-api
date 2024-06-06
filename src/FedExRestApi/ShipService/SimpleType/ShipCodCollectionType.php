<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipCodCollectionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipCodCollectionType extends AbstractSimpleType
{

  const _ANY = 'ANY';
  const _CASH = 'CASH';
  const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
  const _COMPANY_CHECK = 'COMPANY_CHECK';
  const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}
