<?php
namespace FedExRestApi\OpenShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * OpenShipProducerSpecification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipProducerSpecification extends AbstractSimpleType
{

  const _AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
  const _VARIOUS = 'VARIOUS';
  const _SAME_AS_EXPORTER = 'SAME_AS_EXPORTER';
}
