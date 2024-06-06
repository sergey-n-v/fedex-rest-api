<?php
namespace FedExRestApi\AddressValidationService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AddressValidationType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AddressValidationType extends AbstractSimpleType
{

  const _FAX = 'FAX';
  const _HOME = 'HOME';
  const _MOBILE = 'MOBILE';
  const _PAGER = 'PAGER';
  const _WORK = 'WORK';
}