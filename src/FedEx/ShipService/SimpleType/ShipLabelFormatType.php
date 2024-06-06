<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipLabelFormatType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipLabelFormatType extends AbstractSimpleType
{

  const _COMMON2D = 'COMMON2D';
  const _LABEL_DATA_ONLY = 'LABEL_DATA_ONLY';
}