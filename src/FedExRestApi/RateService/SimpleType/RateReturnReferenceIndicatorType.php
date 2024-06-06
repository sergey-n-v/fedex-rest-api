<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateReturnReferenceIndicatorType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateReturnReferenceIndicatorType extends AbstractSimpleType
{

  const _INVOICE = 'INVOICE';
  const _PO = 'PO';
  const _REFERENCE = 'REFERENCE';
  const _TRACKING = 'TRACKING';
}
