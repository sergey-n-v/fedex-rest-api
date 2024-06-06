<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
 * @property OpenShipReturnInstructionsDetail $returnInstructionsDetail
 * @property OpenShipOp900Detail $op900Detail
 * @property OpenShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
 * @property OpenShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
 * @property string $shippingDocumentTypes
 * @property OpenShipCertificateOfOriginDetail $certificateOfOrigin
 * @property OpenShipCommercialInvoiceDetail $commercialInvoiceDetail

 */
class OpenShipShippingDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShippingDocumentSpecification';

    /**
     * Set generalAgencyAgreementDetail
     *
     *
     * Example:
     * @param OpenShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return $this
     */
    public function setGeneralAgencyAgreementDetail(OpenShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->values['generalAgencyAgreementDetail'] = $generalAgencyAgreementDetail;
        return $this;
    }

    /**
     * Get generalAgencyAgreementDetail
     *
     * @return OpenShipGeneralAgencyAgreementDetail
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->values['generalAgencyAgreementDetail'];
    }

    /**
     * Set returnInstructionsDetail
     *
     *
     * Example:
     * @param OpenShipReturnInstructionsDetail $returnInstructionsDetail
     * @return $this
     */
    public function setReturnInstructionsDetail(OpenShipReturnInstructionsDetail $returnInstructionsDetail)
    {
        $this->values['returnInstructionsDetail'] = $returnInstructionsDetail;
        return $this;
    }

    /**
     * Get returnInstructionsDetail
     *
     * @return OpenShipReturnInstructionsDetail
     */
    public function getReturnInstructionsDetail()
    {
        return $this->values['returnInstructionsDetail'];
    }

    /**
     * Set op900Detail
     *
     *
     * Example:
     * @param OpenShipOp900Detail $op900Detail
     * @return $this
     */
    public function setOp900Detail(OpenShipOp900Detail $op900Detail)
    {
        $this->values['op900Detail'] = $op900Detail;
        return $this;
    }

    /**
     * Get op900Detail
     *
     * @return OpenShipOp900Detail
     */
    public function getOp900Detail()
    {
        return $this->values['op900Detail'];
    }

    /**
     * Set usmcaCertificationOfOriginDetail
     *
     *
     * Example:
     * @param OpenShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
     * @return $this
     */
    public function setUsmcaCertificationOfOriginDetail(OpenShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail)
    {
        $this->values['usmcaCertificationOfOriginDetail'] = $usmcaCertificationOfOriginDetail;
        return $this;
    }

    /**
     * Get usmcaCertificationOfOriginDetail
     *
     * @return OpenShipUsmcaCertificationOfOriginDetail
     */
    public function getUsmcaCertificationOfOriginDetail()
    {
        return $this->values['usmcaCertificationOfOriginDetail'];
    }

    /**
     * Set usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     *
     * Example:
     * @param OpenShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
     * @return $this
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(OpenShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail)
    {
        $this->values['usmcaCommercialInvoiceCertificationOfOriginDetail'] = $usmcaCommercialInvoiceCertificationOfOriginDetail;
        return $this;
    }

    /**
     * Get usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     * @return OpenShipUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail()
    {
        return $this->values['usmcaCommercialInvoiceCertificationOfOriginDetail'];
    }

    /**
     * Indicates the types of shipping documents requested.
     *
     * simpleClass: OpenShipShippingDocumentTypes
     * Example: ["RETURN_INSTRUCTIONS"]
     * @param string $shippingDocumentTypes
     * @return $this
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes)
    {
        $this->values['shippingDocumentTypes'] = $shippingDocumentTypes;
        return $this;
    }

    /**
     * Get shippingDocumentTypes
     *
     * @return string
     */
    public function getShippingDocumentTypes()
    {
        return $this->values['shippingDocumentTypes'];
    }

    /**
     * Set certificateOfOrigin
     *
     *
     * Example:
     * @param OpenShipCertificateOfOriginDetail $certificateOfOrigin
     * @return $this
     */
    public function setCertificateOfOrigin(OpenShipCertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->values['certificateOfOrigin'] = $certificateOfOrigin;
        return $this;
    }

    /**
     * Get certificateOfOrigin
     *
     * @return OpenShipCertificateOfOriginDetail
     */
    public function getCertificateOfOrigin()
    {
        return $this->values['certificateOfOrigin'];
    }

    /**
     * Set commercialInvoiceDetail
     *
     *
     * Example:
     * @param OpenShipCommercialInvoiceDetail $commercialInvoiceDetail
     * @return $this
     */
    public function setCommercialInvoiceDetail(OpenShipCommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->values['commercialInvoiceDetail'] = $commercialInvoiceDetail;
        return $this;
    }

    /**
     * Get commercialInvoiceDetail
     *
     * @return OpenShipCommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->values['commercialInvoiceDetail'];
    }
}
