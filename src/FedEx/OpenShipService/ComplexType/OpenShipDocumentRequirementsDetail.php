<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the document requirements detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $requiredDocuments
 * @property string $prohibitedDocuments
 * @property OpenShipDocumentGenerationDetail[] $generationDetails

 */
class OpenShipDocumentRequirementsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipDocumentRequirementsDetail';

    /**
     * Indicates the required documents information.<br>Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     *
     * 
     * Example: ["COMMERCIAL_OR_PRO_FORMA_INVOICE","AIR_WAYBILL"]
     * @param string $requiredDocuments
     * @return $this
     */
    public function setRequiredDocuments(array $requiredDocuments)
    {
        $this->values['requiredDocuments'] = $requiredDocuments;
        return $this;
    }

    /**
     * Get requiredDocuments
     *
     * @return string
     */
    public function getRequiredDocuments()
    {
        return $this->values['requiredDocuments'];
    }

    /**
     * Indicates the prohibited Documents info.<br>Example: ["CERTIFICATE_OF_ORIGIN "]
     *
     * 
     * Example: ["CERTIFICATE_OF_ORIGIN"]
     * @param string $prohibitedDocuments
     * @return $this
     */
    public function setProhibitedDocuments(array $prohibitedDocuments)
    {
        $this->values['prohibitedDocuments'] = $prohibitedDocuments;
        return $this;
    }

    /**
     * Get prohibitedDocuments
     *
     * @return string
     */
    public function getProhibitedDocuments()
    {
        return $this->values['prohibitedDocuments'];
    }

    /**
     * Specifies the generation details.
     *
     * 
     * Example: 
     * @param OpenShipDocumentGenerationDetail[] $generationDetails
     * @return $this
     */
    public function setGenerationDetails(array $generationDetails)
    {
        $this->values['generationDetails'] = $generationDetails;
        return $this;
    }

    /**
     * Get generationDetails
     *
     * @return OpenShipDocumentGenerationDetail[]
     */
    public function getGenerationDetails()
    {
        return $this->values['generationDetails'];
    }
}
