<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipCodCollectionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipCodCollectionType extends AbstractSimpleType
{

  const _ANY = 'ANY';
  const _CASH = 'CASH';
  const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
  const _COMPANY_CHECK = 'COMPANY_CHECK';
  const _PERSONAL_CHECK = 'PERSONAL_CHECK';
}
