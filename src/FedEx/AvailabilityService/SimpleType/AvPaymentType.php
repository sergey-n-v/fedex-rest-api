<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvPaymentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvPaymentType extends AbstractSimpleType
{

  const _SENDER = 'SENDER';
  const _RECIPIENT = 'RECIPIENT';
  const _THIRD_PARTY = 'THIRD_PARTY';
  const _COLLECT = 'COLLECT';
}
