<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipMaskedData
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipMaskedData extends AbstractSimpleType
{

  const _CUSTOMS_VALUE = 'CUSTOMS_VALUE';
  const _DIMENSIONS = 'DIMENSIONS';
  const _DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER = 'DUTIES_AND_TAXES_PAYOR_ACCOUNT_NUMBER';
  const _INSURED_VALUE = 'INSURED_VALUE';
  const _SECONDARY_BARCODE = 'SECONDARY_BARCODE';
  const _SHIPPER_INFORMATION = 'SHIPPER_INFORMATION';
  const _TERMS_AND_CONDITIONS = 'TERMS_AND_CONDITIONS';
  const _TOTAL_WEIGHT = 'TOTAL_WEIGHT';
  const _TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER = 'TRANSPORTATION_CHARGES_PAYOR_ACCOUNT_NUMBER';
}
