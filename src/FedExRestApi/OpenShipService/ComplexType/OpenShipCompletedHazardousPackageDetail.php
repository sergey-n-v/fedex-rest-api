<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
 * @property OpenShipValidatedHazardousContainer[] $containers
 * @property boolean $cargoAircraftOnly
 * @property string $referenceId
 * @property float $radioactiveTransportIndex

 */
class OpenShipCompletedHazardousPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCompletedHazardousPackageDetail';

    /**
     * Specifies the hazardous package regulation type.<br>Example: IATA
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
     * Specifies the hazardous package accessibility.<br>Example: ACCESSIBLE
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
     * Specifies the label type for Hhardous package.<br>Example: II_YELLOW
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
     * Indicates one or more approved containers used to pack dangerous goods commodities. This does not describe any individual inner receptacles that may be within this container.
     *
     *
     * Example:
     * @param OpenShipValidatedHazardousContainer[] $containers
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
     * @return OpenShipValidatedHazardousContainer[]
     */
    public function getContainers()
    {
        return $this->values['containers'];
    }

    /**
     * A Boolean value that, when True, specifies the mode of shipment transportation should be Cargo Aircraft for Dangerous Goods. <br>Note: An identifier DGD-CAO is added in AWB for cargo aircraft shipments.
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
     * A unique reference id that matches the package to a package configuration. This is populated if the client provided a package configuration for several packages that have the exact same dangerous goods content.<br>Example: 123456
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
     * Specifies the maximum radiation level from the package (measured in microSieverts per hour at a distance of one meter from the external surface of the package, divided by 10).<br>Example: 2.45
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
