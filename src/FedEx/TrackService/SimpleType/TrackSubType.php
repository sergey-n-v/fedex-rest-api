<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackSubType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class TrackSubType extends AbstractSimpleType
{

  const _SNOW = 'SNOW';
  const _TORNADO = 'TORNADO';
  const _EARTHQUAKE ETC = 'EARTHQUAKE ETC';
}
