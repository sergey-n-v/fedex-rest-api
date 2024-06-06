<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipReturnReferenceIndicatorType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipReturnReferenceIndicatorType extends AbstractSimpleType
{

  const _INVOICE = 'INVOICE';
  const _PO = 'PO';
  const _REFERENCE = 'REFERENCE';
  const _TRACKING = 'TRACKING';
}
