<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Field which holds the weight and dimension information.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property TrackWeight[] $weight
 * @property TrackDimensions[] $dimensions

 */
class TrackTrackingWeightAndDimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackTrackingWeightAndDimensions';

    /**
     * Set weight
     *
     *
     * Example:
     * @param TrackWeight[] $weight
     * @return $this
     */
    public function setWeight(array $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return TrackWeight[]
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Set dimensions
     *
     *
     * Example:
     * @param TrackDimensions[] $dimensions
     * @return $this
     */
    public function setDimensions(array $dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return TrackDimensions[]
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }
}
