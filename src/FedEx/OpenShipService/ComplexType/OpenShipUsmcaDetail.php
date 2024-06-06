<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the USMCA detail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $originCriterion

 */
class OpenShipUsmcaDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipUsmcaDetail';

    /**
     * Specify the origin criterion.
     *
     * simpleClass: OpenShipOriginCriterion
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
