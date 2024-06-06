<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipDispositionType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipDispositionType extends AbstractSimpleType
{

  const _CONFIRMED = 'CONFIRMED';
  const _DEFERRED_QUEUED = 'DEFERRED_QUEUED';
  const _DEFERRED_RETURNED = 'DEFERRED_RETURNED';
  const _DEFERRED_STORED = 'DEFERRED_STORED';
  const _EMAILED = 'EMAILED';
  const _QUEUED = 'QUEUED';
  const _RETURNED = 'RETURNED';
  const _STORED = 'STORED';
}
