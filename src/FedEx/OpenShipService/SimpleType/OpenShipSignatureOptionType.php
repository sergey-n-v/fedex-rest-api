<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipSignatureOptionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipSignatureOptionType extends AbstractSimpleType
{

  const _SERVICE_DEFAULT = 'SERVICE_DEFAULT';
  const _NO_SIGNATURE_REQUIRED = 'NO_SIGNATURE_REQUIRED';
  const _INDIRECT = 'INDIRECT';
  const _DIRECT = 'DIRECT';
  const _ADULT = 'ADULT';
}
