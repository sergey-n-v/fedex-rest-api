<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipMergeLabelDocOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipMergeLabelDocOption extends AbstractSimpleType
{

  const _NONE = 'NONE';
  const _LABELS_AND_DOCS = 'LABELS_AND_DOCS';
  const _LABELS_ONLY = 'LABELS_ONLY';
}
