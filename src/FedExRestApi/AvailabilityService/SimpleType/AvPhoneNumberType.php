<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

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
