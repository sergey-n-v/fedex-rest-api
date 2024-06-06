<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvType extends AbstractSimpleType
{

  const _FAX = 'FAX';
  const _HOME = 'HOME';
  const _MOBILE = 'MOBILE';
  const _PAGER = 'PAGER';
  const _WORK = 'WORK';
}
