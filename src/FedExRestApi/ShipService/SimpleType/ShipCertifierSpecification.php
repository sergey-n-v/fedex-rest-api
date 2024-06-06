<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipCertifierSpecification
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipCertifierSpecification extends AbstractSimpleType
{

  const _EXPORTER = 'EXPORTER';
  const _IMPORTER = 'IMPORTER';
  const _PRODUCER = 'PRODUCER';
}