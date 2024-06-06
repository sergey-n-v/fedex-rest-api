<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipReturnReferenceIndicatorType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipReturnReferenceIndicatorType extends AbstractSimpleType
{

  const _INVOICE = 'INVOICE';
  const _PO = 'PO';
  const _REFERENCE = 'REFERENCE';
  const _TRACKING = 'TRACKING';
}
