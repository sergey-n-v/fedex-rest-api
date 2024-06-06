<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipCommodityClarificationDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $commodityIndex
 * @property OpenShipSuggestedCommodityDetail[] $suggestions

 */
class OpenShipCommodityClarificationDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCommodityClarificationDetail';

    /**
     * This is a index identifying the commodity in the request that resulted in this COMMODITY or DOCUMENT type prohibition.<br>Example: 25
     *
     * 
     * Example: 25
     * @param int $commodityIndex
     * @return $this
     */
    public function setCommodityIndex($commodityIndex)
    {
        $this->values['commodityIndex'] = $commodityIndex;
        return $this;
    }

    /**
     * Get commodityIndex
     *
     * @return int
     */
    public function getCommodityIndex()
    {
        return $this->values['commodityIndex'];
    }

    /**
     * These are suggested commodity details.
     *
     * 
     * Example: 
     * @param OpenShipSuggestedCommodityDetail[] $suggestions
     * @return $this
     */
    public function setSuggestions(array $suggestions)
    {
        $this->values['suggestions'] = $suggestions;
        return $this;
    }

    /**
     * Get suggestions
     *
     * @return OpenShipSuggestedCommodityDetail[]
     */
    public function getSuggestions()
    {
        return $this->values['suggestions'];
    }
}
