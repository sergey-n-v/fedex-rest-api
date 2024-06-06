<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to provide all data required for additional (non-label) shipping documents to be produced.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
 * @property ShipReturnInstructionsDetail $returnInstructionsDetail
 * @property ShipOp900Detail $op900Detail
 * @property ShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
 * @property ShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
 * @property string $shippingDocumentTypes
 * @property ShipCertificateOfOriginDetail $certificateOfOrigin
 * @property ShipCommercialInvoiceDetail $commercialInvoiceDetail

 */
class ShipShippingDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShippingDocumentSpecification';

    /**
     * Set generalAgencyAgreementDetail
     *
     * 
     * Example: 
     * @param ShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return $this
     */
    public function setGeneralAgencyAgreementDetail(ShipGeneralAgencyAgreementDetail $generalAgencyAgreementDetail)
    {
        $this->values['generalAgencyAgreementDetail'] = $generalAgencyAgreementDetail;
        return $this;
    }

    /**
     * Get generalAgencyAgreementDetail
     *
     * @return ShipGeneralAgencyAgreementDetail
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
     * @param ShipReturnInstructionsDetail $returnInstructionsDetail
     * @return $this
     */
    public function setReturnInstructionsDetail(ShipReturnInstructionsDetail $returnInstructionsDetail)
    {
        $this->values['returnInstructionsDetail'] = $returnInstructionsDetail;
        return $this;
    }

    /**
     * Get returnInstructionsDetail
     *
     * @return ShipReturnInstructionsDetail
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
     * @param ShipOp900Detail $op900Detail
     * @return $this
     */
    public function setOp900Detail(ShipOp900Detail $op900Detail)
    {
        $this->values['op900Detail'] = $op900Detail;
        return $this;
    }

    /**
     * Get op900Detail
     *
     * @return ShipOp900Detail
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
     * @param ShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail
     * @return $this
     */
    public function setUsmcaCertificationOfOriginDetail(ShipUsmcaCertificationOfOriginDetail $usmcaCertificationOfOriginDetail)
    {
        $this->values['usmcaCertificationOfOriginDetail'] = $usmcaCertificationOfOriginDetail;
        return $this;
    }

    /**
     * Get usmcaCertificationOfOriginDetail
     *
     * @return ShipUsmcaCertificationOfOriginDetail
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
     * @param ShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail
     * @return $this
     */
    public function setUsmcaCommercialInvoiceCertificationOfOriginDetail(ShipUsmcaCommercialInvoiceCertificationOfOriginDetail $usmcaCommercialInvoiceCertificationOfOriginDetail)
    {
        $this->values['usmcaCommercialInvoiceCertificationOfOriginDetail'] = $usmcaCommercialInvoiceCertificationOfOriginDetail;
        return $this;
    }

    /**
     * Get usmcaCommercialInvoiceCertificationOfOriginDetail
     *
     * @return ShipUsmcaCommercialInvoiceCertificationOfOriginDetail
     */
    public function getUsmcaCommercialInvoiceCertificationOfOriginDetail()
    {
        return $this->values['usmcaCommercialInvoiceCertificationOfOriginDetail'];
    }

    /**
     * Set shippingDocumentTypes
     *
     * simpleClass: ShipShippingDocumentTypes
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
     * @param ShipCertificateOfOriginDetail $certificateOfOrigin
     * @return $this
     */
    public function setCertificateOfOrigin(ShipCertificateOfOriginDetail $certificateOfOrigin)
    {
        $this->values['certificateOfOrigin'] = $certificateOfOrigin;
        return $this;
    }

    /**
     * Get certificateOfOrigin
     *
     * @return ShipCertificateOfOriginDetail
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
     * @param ShipCommercialInvoiceDetail $commercialInvoiceDetail
     * @return $this
     */
    public function setCommercialInvoiceDetail(ShipCommercialInvoiceDetail $commercialInvoiceDetail)
    {
        $this->values['commercialInvoiceDetail'] = $commercialInvoiceDetail;
        return $this;
    }

    /**
     * Get commercialInvoiceDetail
     *
     * @return ShipCommercialInvoiceDetail
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->values['commercialInvoiceDetail'];
    }
}
