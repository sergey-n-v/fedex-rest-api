<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateDocumentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateDocumentType extends AbstractSimpleType
{

  const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
  const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
  const _ETD_LABEL = 'ETD_LABEL';
  const _NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
  const _NET_RATE_SHEET = 'NET_RATE_SHEET';
  const _OTHER = 'OTHER';
  const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
}
