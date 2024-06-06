<?php
namespace FedEx\PickupService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * PickupAssociatedAccountNumberType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class PickupAssociatedAccountNumberType extends AbstractSimpleType
{

  const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
  const _FEDEX_GROUND = 'FEDEX_GROUND';
}
