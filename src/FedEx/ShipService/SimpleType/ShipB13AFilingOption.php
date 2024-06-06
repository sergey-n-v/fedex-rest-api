<?php
namespace FedEx\ShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * ShipB13AFilingOption
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipB13AFilingOption extends AbstractSimpleType
{

  const _NOT_REQUIRED = 'NOT_REQUIRED';
  const _MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
  const _FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
  const _SUMMARY_REPORTING = 'SUMMARY_REPORTING';
  const _FEDEX_TO_STAMP = 'FEDEX_TO_STAMP';
}
