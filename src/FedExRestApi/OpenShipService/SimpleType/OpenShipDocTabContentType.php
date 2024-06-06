<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipDocTabContentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipDocTabContentType extends AbstractSimpleType
{

  const _BARCODED = 'BARCODED';
  const _CUSTOM = 'CUSTOM';
  const _MINIMUM = 'MINIMUM';
  const _STANDARD = 'STANDARD';
  const _ZONE001 = 'ZONE001';
}
