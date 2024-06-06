<?php
namespace FedExRestApi\ShipService\ComplexType;

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
class ShipRecommendedDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRecommendedDocumentSpecification';

    /**
     * Set types
     *
     * simpleClass: ShipTypes
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
