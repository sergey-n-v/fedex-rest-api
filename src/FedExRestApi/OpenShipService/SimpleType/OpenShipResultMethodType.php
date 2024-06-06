<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipResultMethodType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipResultMethodType extends AbstractSimpleType
{

  const _CREATE = 'CREATE';
  const _MODIFY = 'MODIFY';
  const _CONFIRM = 'CONFIRM';
}
