<?php
namespace FedEx\TrackService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * TrackOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class TrackOption extends AbstractSimpleType
{

  const _DISPUTE_DELIVERY = 'DISPUTE_DELIVERY';
  const _INDIRECT_SIGNATURE_RELEASE = 'INDIRECT_SIGNATURE_RELEASE';
  const _REDIRECT_TO_HOLD_AT_LOCATION = 'REDIRECT_TO_HOLD_AT_LOCATION';
  const _REROUTE = 'REROUTE';
  const _RESCHEDULE = 'RESCHEDULE';
  const _RETURN_TO_SHIPPER = 'RETURN_TO_SHIPPER';
  const _SUPPLEMENT_ADDRESS = 'SUPPLEMENT_ADDRESS';
}
