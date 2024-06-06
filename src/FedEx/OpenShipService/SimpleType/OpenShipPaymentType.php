<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipPaymentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipPaymentType extends AbstractSimpleType
{

  const _SENDER = 'SENDER';
  const _RECIPIENT = 'RECIPIENT';
  const _THIRD_PARTY = 'THIRD_PARTY';
  const _COLLECT = 'COLLECT';
}
