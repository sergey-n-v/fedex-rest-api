<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipAncillaryEndorsement
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipAncillaryEndorsement extends AbstractSimpleType
{

  const _ADDRESS_CORRECTION = 'ADDRESS_CORRECTION';
  const _CARRIER_LEAVE_IF_NO_RESPONSE = 'CARRIER_LEAVE_IF_NO_RESPONSE';
  const _CHANGE_SERVICE = 'CHANGE_SERVICE';
  const _FORWARDING_SERVICE = 'FORWARDING_SERVICE';
  const _RETURN_SERVICE = 'RETURN_SERVICE';
}
