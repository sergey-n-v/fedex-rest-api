<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RateRole
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RateRole extends AbstractSimpleType
{

  const _SHIPMENT_COMPLETOR = 'SHIPMENT_COMPLETOR';
  const _SHIPMENT_INITIATOR = 'SHIPMENT_INITIATOR';
}
