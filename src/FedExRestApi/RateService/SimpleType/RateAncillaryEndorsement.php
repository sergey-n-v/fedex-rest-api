<?php
namespace FedExRestApi\RateService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * RateAncillaryEndorsement
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateAncillaryEndorsement extends AbstractSimpleType
{

  const _ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
  const _CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
  const _CHANGE_SERVICE = 'CHANGE_SERVICE';
  const _FORWARDING_SERVICE = 'FORWARDING_SERVICE';
  const _RETURN_SERVICE = 'RETURN_SERVICE';
}
