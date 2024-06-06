<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipRecipientType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipRecipientType extends AbstractSimpleType
{

  const _BROKER = 'BROKER';
  const _OTHER = 'OTHER';
  const _RECIPIENT = 'RECIPIENT';
  const _SHIPPER = 'SHIPPER';
  const _THIRD_PARTY = 'THIRD_PARTY';
  const _OTHER1 = 'OTHER1';
  const _OTHER2 = 'OTHER2';
}
