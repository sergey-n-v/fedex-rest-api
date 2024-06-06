<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipPaymentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipPaymentType extends AbstractSimpleType
{

  const _SENDER = 'SENDER';
  const _RECIPIENT = 'RECIPIENT';
  const _THIRD_PARTY = 'THIRD_PARTY';
  const _COLLECT = 'COLLECT';
}
