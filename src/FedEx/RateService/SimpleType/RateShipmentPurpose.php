<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateShipmentPurpose
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateShipmentPurpose extends AbstractSimpleType
{

  const _GIFT = 'GIFT';
  const _NOT_SOLD = 'NOT_SOLD';
  const _PERSONAL_EFFECTS = 'PERSONAL_EFFECTS';
  const _REPAIR_AND_RETURN = 'REPAIR_AND_RETURN';
  const _SAMPLE = 'SAMPLE';
  const _SOLD = 'SOLD';
  const _COMMERCIAL = 'COMMERCIAL';
  const _RETURN_AND_REPAIR = 'RETURN_AND_REPAIR';
  const _PERSONAL_USE = 'PERSONAL_USE';
}
