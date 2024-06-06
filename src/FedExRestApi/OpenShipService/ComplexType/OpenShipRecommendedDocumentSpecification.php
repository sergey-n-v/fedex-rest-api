<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are documents that are recommended to be included with the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $types

 */
class OpenShipRecommendedDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRecommendedDocumentSpecification';

    /**
     * This is the recommended document Type.<br><a onclick='loadDocReference("shipmentdocumenttype")'>click here to see shipment document type</a>
     *
     * simpleClass: OpenShipTypes
     * Example: ANTIQUE_STATEMENT_EUROPEAN_UNION
     * @param string $types
     * @return $this
     */
    public function setTypes(array $types)
    {
        $this->values['types'] = $types;
        return $this;
    }

    /**
     * Get types
     *
     * @return string
     */
    public function getTypes()
    {
        return $this->values['types'];
    }
}
