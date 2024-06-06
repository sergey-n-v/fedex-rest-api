<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvPhoneNumberType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvPhoneNumberType extends AbstractSimpleType
{

  const _FAX = 'FAX';
  const _HOME = 'HOME';
  const _MOBILE = 'MOBILE';
  const _PAGER = 'PAGER';
  const _TOLL_FREE = 'TOLL_FREE';
  const _WORK = 'WORK';
}
