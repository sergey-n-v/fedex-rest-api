<?php
namespace FedEx\RateService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * RatePrintedReferenceType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class RatePrintedReferenceType extends AbstractSimpleType
{

  const _BILL_OF_LADING = 'BILL_OF_LADING';
  const _CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
  const _INTERLINE_PRO_NUMBER = 'INTERLINE_PRO_NUMBER';
  const _PO_NUMBER = 'PO_NUMBER';
  const _SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
  const _SHIPPER_ID1_NUMBER = 'SHIPPER_ID1_NUMBER';
  const _SHIPPER_ID2_NUMBER = 'SHIPPER_ID2_NUMBER';
}
