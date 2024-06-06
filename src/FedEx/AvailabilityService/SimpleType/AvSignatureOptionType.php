<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvSignatureOptionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvSignatureOptionType extends AbstractSimpleType
{

  const _SERVICE_DEFAULT = 'SERVICE_DEFAULT';
  const _NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
  const _INDIRECT = 'INDIRECT';
  const _DIRECT = 'DIRECT';
  const _ADULT = 'ADULT';
}
