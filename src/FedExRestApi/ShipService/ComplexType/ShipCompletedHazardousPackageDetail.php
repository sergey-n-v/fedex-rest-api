<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Complete package-level hazardous commodity information for a single package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $regulation
 * @property string $accessibility
 * @property string $labelType
 * @property ShipValidatedHazardousContainer[] $containers
 * @property boolean $cargoAircraftOnly
 * @property string $referenceId
 * @property float $radioactiveTransportIndex

 */
class ShipCompletedHazardousPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCompletedHazardousPackageDetail';

    /**
     * Set regulation
     *
     *
     * Example: IATA
     * @param string $regulation
     * @return $this
     */
    public function setRegulation($regulation)
    {
        $this->values['regulation'] = $regulation;
        return $this;
    }

    /**
     * Get regulation
     *
     * @return string
     */
    public function getRegulation()
    {
        return $this->values['regulation'];
    }

    /**
     * Set accessibility
     *
     *
     * Example: ACCESSIBLE
     * @param string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Get accessibility
     *
     * @return string
     */
    public function getAccessibility()
    {
        return $this->values['accessibility'];
    }

    /**
     * Set labelType
     *
     *
     * Example: II_YELLOW
     * @param string $labelType
     * @return $this
     */
    public function setLabelType($labelType)
    {
        $this->values['labelType'] = $labelType;
        return $this;
    }

    /**
     * Get labelType
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->values['labelType'];
    }

    /**
     * Set containers
     *
     *
     * Example:
     * @param ShipValidatedHazardousContainer[] $containers
     * @return $this
     */
    public function setContainers(array $containers)
    {
        $this->values['containers'] = $containers;
        return $this;
    }

    /**
     * Get containers
     *
     * @return ShipValidatedHazardousContainer[]
     */
    public function getContainers()
    {
        return $this->values['containers'];
    }

    /**
     * Set cargoAircraftOnly
     *
     *
     * Example: 1
     * @param boolean $cargoAircraftOnly
     * @return $this
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->values['cargoAircraftOnly'] = $cargoAircraftOnly;
        return $this;
    }

    /**
     * Get cargoAircraftOnly
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->values['cargoAircraftOnly'];
    }

    /**
     * Set referenceId
     *
     *
     * Example: 123456
     * @param string $referenceId
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->values['referenceId'] = $referenceId;
        return $this;
    }

    /**
     * Get referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->values['referenceId'];
    }

    /**
     * Set radioactiveTransportIndex
     *
     *
     * Example: 2.45
     * @param float $radioactiveTransportIndex
     * @return $this
     */
    public function setRadioactiveTransportIndex($radioactiveTransportIndex)
    {
        $this->values['radioactiveTransportIndex'] = $radioactiveTransportIndex;
        return $this;
    }

    /**
     * Get radioactiveTransportIndex
     *
     * @return float
     */
    public function getRadioactiveTransportIndex()
    {
        return $this->values['radioactiveTransportIndex'];
    }
}
