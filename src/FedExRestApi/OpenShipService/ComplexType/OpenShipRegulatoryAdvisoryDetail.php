<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the regulatory advisory details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipCommodityClarificationDetail[] $commodityClarifications
 * @property OpenShipRegulatoryProhibition[] $prohibitions

 */
class OpenShipRegulatoryAdvisoryDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRegulatoryAdvisoryDetail';

    /**
     * Indicates the Commodity clarifications.
     *
     *
     * Example:
     * @param OpenShipCommodityClarificationDetail[] $commodityClarifications
     * @return $this
     */
    public function setCommodityClarifications(array $commodityClarifications)
    {
        $this->values['commodityClarifications'] = $commodityClarifications;
        return $this;
    }

    /**
     * Get commodityClarifications
     *
     * @return OpenShipCommodityClarificationDetail[]
     */
    public function getCommodityClarifications()
    {
        return $this->values['commodityClarifications'];
    }

    /**
     * It is a regulatory probitions.
     *
     *
     * Example:
     * @param OpenShipRegulatoryProhibition[] $prohibitions
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
     * @return OpenShipRegulatoryProhibition[]
     */
    public function getProhibitions()
    {
        return $this->values['prohibitions'];
    }
}
