<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipCustomerReferenceType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipCustomerReferenceType extends AbstractSimpleType
{

  const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
  const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
  const _INVOICE_NUMBER = 'INVOICE_NUMBER';
  const _P_O_NUMBER = 'P_O_NUMBER';
  const _INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
  const _RMA_ASSOCIATION = 'RMA_ASSOCIATION';
}
