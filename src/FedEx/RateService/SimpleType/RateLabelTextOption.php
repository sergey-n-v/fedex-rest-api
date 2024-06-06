<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateLabelTextOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateLabelTextOption extends AbstractSimpleType
{

  const _APPEND = 'APPEND';
  const _OVERRIDE = 'OVERRIDE';
  const _STANDARD = 'STANDARD';
}
