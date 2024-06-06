<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipProducerSpecification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipProducerSpecification extends AbstractSimpleType
{

  const _AVAILABLE_UPON_REQUEST = 'AVAILABLE_UPON_REQUEST';
  const _VARIOUS = 'VARIOUS';
  const _SAME_AS_EXPORTER = 'SAME_AS_EXPORTER';
}
