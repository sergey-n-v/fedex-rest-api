<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

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
