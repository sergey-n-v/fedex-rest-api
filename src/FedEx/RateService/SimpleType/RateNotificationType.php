<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateNotificationType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateNotificationType extends AbstractSimpleType
{

  const _EMAIL = 'EMAIL';
  const _SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
}
