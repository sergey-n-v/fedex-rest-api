<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateGuaranteedType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateGuaranteedType extends AbstractSimpleType
{

  const _GUARANTEED_MORNING = 'GUARANTEED_MORNING';
  const _GUARANTEED_CLOSE_OF_BUSINESS = 'GUARANTEED_CLOSE_OF_BUSINESS';
}
