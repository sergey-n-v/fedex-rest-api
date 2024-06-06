<?php
namespace FedEx\AvailabilityService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * AvReturnShipmentList
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvReturnShipmentList extends AbstractSimpleType
{

  const _FEDEX_TAG = 'FEDEX_TAG';
  const _PENDING = 'PENDING';
  const _PRINT_RETURN_LABEL = 'PRINT_RETURN_LABEL';
  const _EMAIL_LABEL = 'EMAIL_LABEL';
}
