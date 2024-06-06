<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvLtlPaymentTerms
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvLtlPaymentTerms extends AbstractSimpleType
{

  const _PREPAID = 'PREPAID';
  const _COLLECT = 'COLLECT';
  const _COLLECT_SECTION_7_SIGNED = 'COLLECT_SECTION_7_SIGNED';
  const _COLLECT_SECTION_9_SIGNED = 'COLLECT_SECTION_9_SIGNED';
}
