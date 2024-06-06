<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipGenerationOptions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipGenerationOptions extends AbstractSimpleType
{

  const _CONTENT_ON_SHIPPING_LABEL_PREFERRED = 'CONTENT_ON_SHIPPING_LABEL_PREFERRED';
  const _CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY = 'CONTENT_ON_SUPPLEMENTAL_LABEL_ONLY';
  const _CONTENT_ON_SHIPPING_LABEL_ONLY = 'CONTENT_ON_SHIPPING_LABEL_ONLY';
}
