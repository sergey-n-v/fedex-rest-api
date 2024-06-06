<?php
namespace FedExRestApi\AvailabilityService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * AvCustomerReferenceType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class AvCustomerReferenceType extends AbstractSimpleType
{

  const _BILL_OF_LADING = 'BILL_OF_LADING';
  const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
  const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
  const _INVOICE_NUMBER = 'INVOICE_NUMBER';
  const _P_O_NUMBER = 'P_O_NUMBER';
  const _SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
  const _INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
  const _STORE_NUMBER = 'STORE_NUMBER';
  const _RMA_ASSOCIATION = 'RMA_ASSOCIATION';
  const _SHIPPER_ID1 = 'SHIPPER_ID1';
  const _SHIPPER_ID2 = 'SHIPPER_ID2';
}
