<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipServiceCategory
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipServiceCategory extends AbstractSimpleType
{

  const _EXPRESS = 'EXPRESS';
  const _GROUND = 'GROUND';
  const _EXPRESS_FREIGHT = 'EXPRESS_FREIGHT';
  const _FREIGHT = 'FREIGHT';
  const _SMARTPOST = 'SMARTPOST';
  const _EXPRESS_PARCEL = 'EXPRESS_PARCEL';
  const _NULL = 'NULL';
}
