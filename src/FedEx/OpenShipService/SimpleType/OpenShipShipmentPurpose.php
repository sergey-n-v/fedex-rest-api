<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipShipmentPurpose
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipShipmentPurpose extends AbstractSimpleType
{

  const _GIFT = 'GIFT';
  const _NOT_SOLD = 'NOT_SOLD';
  const _PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
  const _REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
  const _SAMPLE = 'SAMPLE';
  const _SOLD = 'SOLD';
}
