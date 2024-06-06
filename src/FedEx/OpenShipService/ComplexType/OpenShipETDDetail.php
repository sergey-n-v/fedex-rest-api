<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify all information on how the electronic Trade document references used with the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $attributes
 * @property OpenShipUploadDocumentReferenceDetail[] $attachedDocuments
 * @property string $requestedDocumentTypes

 */
class OpenShipETDDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipETDDetail';

    /**
     * Use this attribute to specify if the Trade documents will be uploaded post the shipment.
     *
     * simpleClass: OpenShipAttributes
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
     * Use this object to specify the details regarding already uploded document(s). This object is required if the documents are uploaded Pre-Shipment uploaded documents. It is recommended to provide values for all elements under this object.
     *
     * 
     * Example: 
     * @param OpenShipUploadDocumentReferenceDetail[] $attachedDocuments
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
     * @return OpenShipUploadDocumentReferenceDetail[]
     */
    public function getAttachedDocuments()
    {
        return $this->values['attachedDocuments'];
    }

    /**
     * Indicate the types of shipping documents to be produced by FedEx and copied back in the shipment result data.<br>Note: For more information document types, refer business overview topic - <a href='#shippingandcustoms'><b>Shipping and Customs Documents.</b></a>
     *
     * simpleClass: OpenShipRequestedDocumentTypes
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
