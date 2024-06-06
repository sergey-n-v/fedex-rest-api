<?php
namespace FedExRestApi\TrackService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * TrackStatus
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class TrackStatus extends AbstractSimpleType
{

  const _DELAYED = 'DELAYED';
  const _ON_TIME = 'ON_TIME';
  const _EARLY = 'EARLY';
}
