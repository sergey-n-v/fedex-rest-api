<?php
namespace FedExRestApi\ETDService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * EtdWorkflowName
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class EtdWorkflowName extends AbstractSimpleType
{

  const _ETDPRESHIPMENT = 'ETDPreshipment';
  const _ETDPOSTSHIPMENT = 'ETDPostshipment';
}
