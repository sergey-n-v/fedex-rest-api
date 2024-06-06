<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateVariableOptions
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateVariableOptions extends AbstractSimpleType
{

  const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
  const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
  const _SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
  const _SMARTPOST_HUB_ID = 'SMARTPOST_HUB_ID';
}
