<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the regulatory advisory details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipRegulatoryProhibition[] $prohibitions

 */
class ShipRegulatoryAdvisoryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRegulatoryAdvisoryDetail';

    /**
     * Set prohibitions
     *
     * 
     * Example: 
     * @param ShipRegulatoryProhibition[] $prohibitions
     * @return $this
     */
    public function setProhibitions(array $prohibitions)
    {
        $this->values['prohibitions'] = $prohibitions;
        return $this;
    }

    /**
     * Get prohibitions
     *
     * @return ShipRegulatoryProhibition[]
     */
    public function getProhibitions()
    {
        return $this->values['prohibitions'];
    }
}
