<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRatingBasis
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRatingBasis extends AbstractSimpleType
{

  const _SHIPMENT_WEIGHT_BASED = 'SHIPMENT_WEIGHT_BASED';
  const _FLAT_RATE_PER_PACK = 'FLAT_RATE_PER_PACK';
  const _PACK_WEIGHT_BASED = 'PACK_WEIGHT_BASED';
}
