<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateFreightChargeBasis
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateFreightChargeBasis extends AbstractSimpleType
{

  const _CWT = 'CWT';
  const _FLAT = 'FLAT';
  const _MINIMUM = 'MINIMUM';
}
