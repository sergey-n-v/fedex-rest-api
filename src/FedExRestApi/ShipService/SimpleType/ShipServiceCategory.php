<?php
namespace FedExRestApi\ShipService\SimpleType;

use FedExRestApi\AbstractSimpleType;

/**
 * ShipServiceCategory
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class ShipServiceCategory extends AbstractSimpleType
{

  const _EXPRESS = 'EXPRESS';
  const _GROUND = 'GROUND';
  const _EXPRESS_FREIGHT = 'EXPRESS_FREIGHT';
  const _FREIGHT = 'FREIGHT';
  const _SMARTPOST = 'SMARTPOST';
  const _EXPRESS_PARCEL = 'EXPRESS_PARCEL';
  const _NULL = 'NULL';
}
