<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateReturnType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateReturnType extends AbstractSimpleType
{

  const _FEDEX_TAG = 'FEDEX_TAG';
  const _PENDING = 'PENDING';
  const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
  const _EMAIL_LABEL = 'EMAIL_LABEL';
  const _NET_RETURN = 'NET_RETURN';
  const _VOICE_CALL_TAG = 'VOICE_CALL_TAG';
}
