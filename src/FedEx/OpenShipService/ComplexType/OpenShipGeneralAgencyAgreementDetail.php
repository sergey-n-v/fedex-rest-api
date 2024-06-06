<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify details to generate general agency agreement detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipShippingDocumentFormat $documentFormat

 */
class OpenShipGeneralAgencyAgreementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipGeneralAgencyAgreementDetail';

    /**
     * Set documentFormat
     *
     * 
     * Example: 
     * @param OpenShipShippingDocumentFormat $documentFormat
     * @return $this
     */
    public function setDocumentFormat(OpenShipShippingDocumentFormat $documentFormat)
    {
        $this->values['documentFormat'] = $documentFormat;
        return $this;
    }

    /**
     * Get documentFormat
     *
     * @return OpenShipShippingDocumentFormat
     */
    public function getDocumentFormat()
    {
        return $this->values['documentFormat'];
    }
}
