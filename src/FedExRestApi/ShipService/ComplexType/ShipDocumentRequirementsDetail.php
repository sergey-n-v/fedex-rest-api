<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the document requirements detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $requiredDocuments
 * @property string $prohibitedDocuments
 * @property ShipDocumentGenerationDetail[] $generationDetails

 */
class ShipDocumentRequirementsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipDocumentRequirementsDetail';

    /**
     * Set requiredDocuments
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
     * Set prohibitedDocuments
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
     * Set generationDetails
     *
     *
     * Example:
     * @param ShipDocumentGenerationDetail[] $generationDetails
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
     * @return ShipDocumentGenerationDetail[]
     */
    public function getGenerationDetails()
    {
        return $this->values['generationDetails'];
    }
}
