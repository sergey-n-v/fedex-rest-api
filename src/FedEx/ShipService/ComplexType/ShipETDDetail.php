<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify all information on how the electronic Trade document references used with the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $attributes
 * @property ShipUploadDocumentReferenceDetail[] $attachedDocuments
 * @property string $requestedDocumentTypes

 */
class ShipETDDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipETDDetail';

    /**
     * Set attributes
     *
     * simpleClass: ShipAttributes
     * Example: 
     * @param string $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $this->values['attributes'] = $attributes;
        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->values['attributes'];
    }

    /**
     * Set attachedDocuments
     *
     * 
     * Example: 
     * @param ShipUploadDocumentReferenceDetail[] $attachedDocuments
     * @return $this
     */
    public function setAttachedDocuments(array $attachedDocuments)
    {
        $this->values['attachedDocuments'] = $attachedDocuments;
        return $this;
    }

    /**
     * Get attachedDocuments
     *
     * @return ShipUploadDocumentReferenceDetail[]
     */
    public function getAttachedDocuments()
    {
        return $this->values['attachedDocuments'];
    }

    /**
     * Set requestedDocumentTypes
     *
     * simpleClass: ShipRequestedDocumentTypes
     * Example: ["VICS_BILL_OF_LADING","GENERAL_AGENCY_AGREEMENT"]
     * @param string $requestedDocumentTypes
     * @return $this
     */
    public function setRequestedDocumentTypes(array $requestedDocumentTypes)
    {
        $this->values['requestedDocumentTypes'] = $requestedDocumentTypes;
        return $this;
    }

    /**
     * Get requestedDocumentTypes
     *
     * @return string
     */
    public function getRequestedDocumentTypes()
    {
        return $this->values['requestedDocumentTypes'];
    }
}
