<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are recommended document specification which are recommended to be included with the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $types

 */
class RateRecommendedDocumentSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRecommendedDocumentSpecification';

    /**
     * Set types
     *
     * simpleClass: RateTypes
     * Example:
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
