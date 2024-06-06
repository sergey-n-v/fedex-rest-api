<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipSuggestedCommodityDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property string $harmonizedCode

 */
class OpenShipSuggestedCommodityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipSuggestedCommodityDetail';

    /**
     * This is a suggested commodity description.<br>Example: Commodity
     *
     *
     * Example: description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Specify the harmonized code.<br>Example: XXX12
     *
     *
     * Example: harmonized Code
     * @param string $harmonizedCode
     * @return $this
     */
    public function setHarmonizedCode($harmonizedCode)
    {
        $this->values['harmonizedCode'] = $harmonizedCode;
        return $this;
    }

    /**
     * Get harmonizedCode
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->values['harmonizedCode'];
    }
}
