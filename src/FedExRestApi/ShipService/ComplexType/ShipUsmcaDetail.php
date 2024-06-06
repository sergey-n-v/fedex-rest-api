<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the USMCA detail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $originCriterion

 */
class ShipUsmcaDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipUsmcaDetail';

    /**
     * Set originCriterion
     *
     * simpleClass: ShipOriginCriterion
     * Example:
     * @param string $originCriterion
     * @return $this
     */
    public function setOriginCriterion($originCriterion)
    {
        $this->values['originCriterion'] = $originCriterion;
        return $this;
    }

    /**
     * Get originCriterion
     *
     * @return string
     */
    public function getOriginCriterion()
    {
        return $this->values['originCriterion'];
    }
}
