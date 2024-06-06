<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipSuggestedCommodityDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property string $harmonizedCode

 */
class ShipSuggestedCommodityDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipSuggestedCommodityDetail';

    /**
     * Set description
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
     * Set harmonizedCode
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
