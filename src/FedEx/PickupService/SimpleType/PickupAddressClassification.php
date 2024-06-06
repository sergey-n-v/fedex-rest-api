<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupAddressClassification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupAddressClassification extends AbstractSimpleType
{

  const _MIXED = 'MIXED';
  const _UNKNOWN = 'UNKNOWN';
  const _BUSINESS = 'BUSINESS';
  const _RESIDENTIAL = 'RESIDENTIAL';
}
