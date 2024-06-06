<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Holds the Sub Packaging details for the PackageType
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $dimension
 * @property string $description

 */
class AvSubPackageInfo extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvSubPackageInfo';

    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required with YOUR_PACKAGING package type.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href="https://www.fedex.com/en-us/service-guide.html" target="_blank">FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     *
     * Example: 9-1/2" x 15-1/2" IN
     * @param string $dimension
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->values['dimension'] = $dimension;
        return $this;
    }

    /**
     * Get dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->values['dimension'];
    }

    /**
     * The description of the SubPackage Type
     *
     *
     * Example: Legal
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
}
