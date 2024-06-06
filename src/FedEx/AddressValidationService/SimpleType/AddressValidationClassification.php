<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AddressValidationClassification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AddressValidationClassification extends AbstractSimpleType
{

  const _MIXED = 'MIXED';
  const _UNKNOWN = 'UNKNOWN';
  const _BUSINESS = 'BUSINESS';
  const _RESIDENTIAL = 'RESIDENTIAL';
}
