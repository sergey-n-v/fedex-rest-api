<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipRegulatoryControls
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipRegulatoryControls extends AbstractSimpleType
{

  const _FOOD_OR_PERISHABLE = 'FOOD_OR_PERISHABLE';
  const _USMCA = 'USMCA';
  const _NOT_APPLICABLE_FOR_LOW_VALUE_CUSTOMS_EXCEPTIONS = 'NOT_APPLICABLE_FOR_LOW_VALUE_CUSTOMS_EXCEPTIONS';
  const _NOT_IN_FREE_CIRCULATION = 'NOT_IN_FREE_CIRCULATION';
}
