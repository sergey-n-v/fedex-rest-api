<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipEmailNotificationRecipientType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipEmailNotificationRecipientType extends AbstractSimpleType
{

  const _BROKER = 'BROKER';
  const _OTHER = 'OTHER';
  const _RECIPIENT = 'RECIPIENT';
  const _SHIPPER = 'SHIPPER';
  const _THIRD_PARTY = 'THIRD_PARTY';
}
