<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipSymbology
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipSymbology extends AbstractSimpleType
{

  const _CODABAR = 'CODABAR';
  const _CODE128 = 'CODE128';
  const _CODE128_WIDEBAR = 'CODE128_WIDEBAR';
  const _CODE128B = 'CODE128B';
  const _CODE128C = 'CODE128C';
  const _CODE39 = 'CODE39';
  const _CODE93 = 'CODE93';
  const _I2OF5 = 'I2OF5';
  const _MANUAL = 'MANUAL';
  const _PDF417 = 'PDF417';
  const _POSTNET = 'POSTNET';
  const _QR_CODE = 'QR_CODE';
  const _UCC128 = 'UCC128';
}
