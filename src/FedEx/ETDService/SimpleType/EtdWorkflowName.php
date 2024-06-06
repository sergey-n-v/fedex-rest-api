<?php
namespace FedEx\ETDService\SimpleType;

use FedEx\AbstractSimpleType;

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
