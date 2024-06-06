<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipRole
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipRole extends AbstractSimpleType
{

  const _SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
  const _SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
}
