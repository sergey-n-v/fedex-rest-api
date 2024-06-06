<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are document diposition details. Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipShippingDocumentEmailDetail $eMailDetail
 * @property string $dispositionType

 */
class OpenShipShippingDocumentDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShippingDocumentDispositionDetail';

    /**
     * Set eMailDetail
     *
     *
     * Example:
     * @param OpenShipShippingDocumentEmailDetail $eMailDetail
     * @return $this
     */
    public function setEMailDetail(OpenShipShippingDocumentEmailDetail $eMailDetail)
    {
        $this->values['eMailDetail'] = $eMailDetail;
        return $this;
    }

    /**
     * Get eMailDetail
     *
     * @return OpenShipShippingDocumentEmailDetail
     */
    public function getEMailDetail()
    {
        return $this->values['eMailDetail'];
    }

    /**
     * Specify how to create and return the document.
     *
     * simpleClass: OpenShipDispositionType
     * Example: CONFIRMED
     * @param string $dispositionType
     * @return $this
     */
    public function setDispositionType($dispositionType)
    {
        $this->values['dispositionType'] = $dispositionType;
        return $this;
    }

    /**
     * Get dispositionType
     *
     * @return string
     */
    public function getDispositionType()
    {
        return $this->values['dispositionType'];
    }
}
