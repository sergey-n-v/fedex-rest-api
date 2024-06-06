<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvReturnType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvReturnType extends AbstractSimpleType
{

  const _FEDEX_TAG = 'FEDEX_TAG';
  const _NET_RETURN = 'NET_RETURN';
  const _PENDING = 'PENDING';
  const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
  const _EMAIL_LABEL = 'EMAIL_LABEL';
  const _VOICE_CALL_TAG = 'VOICE_CALL_TAG';
}
