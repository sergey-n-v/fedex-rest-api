<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * OpenShipContentType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 */
class OpenShipContentType extends AbstractSimpleType
{

  const _LABEL = 'LABEL';
  const _BILL_OF_LADING = 'BILL_OF_LADING';
  const _GAA_FORM = 'GAA_FORM';
  const _HAZMAT_LABEL = 'HAZMAT_LABEL';
  const _END_OF_DAY_HAZMAT_REPORT = 'END_OF_DAY_HAZMAT_REPORT';
  const _MANIFEST_REPORT = 'MANIFEST_REPORT';
  const _MULTIWEIGHT_REPORT = 'MULTIWEIGHT_REPORT';
  const _MERGED_LABEL_DOCUMENTS = 'MERGED_LABEL_DOCUMENTS';
  const _AUXILIARY = 'AUXILIARY';
  const _RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
  const _ACCEPTANCE_LABEL = 'ACCEPTANCE_LABEL';
  const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
  const _PROFORMA_INVOICE = 'PROFORMA_INVOICE';
  const _USMCA_CERTIFICATION_OF_ORIGIN = 'USMCA_CERTIFICATION_OF_ORIGIN';
  const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
  const _MERGED_LABELS_ONLY = 'MERGED_LABELS_ONLY';
}