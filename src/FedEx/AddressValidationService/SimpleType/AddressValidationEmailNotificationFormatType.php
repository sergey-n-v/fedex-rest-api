<?php
namespace FedEx\AddressValidationService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AddressValidationEmailNotificationFormatType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AddressValidationEmailNotificationFormatType extends AbstractSimpleType
{

  const _SMS_TEXT_MESSAGE = 'SMS_TEXT_MESSAGE';
  const _TEXT = 'TEXT';
  const _HTML = 'HTML';
}
