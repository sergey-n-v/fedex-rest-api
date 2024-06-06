<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $effectiveNetDiscount
 * @property string $actualRateType
 * @property ShipPackageRateDetail[] $packageRateDetails

 */
class ShipPackageRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageRating';

    /**
     * Set effectiveNetDiscount
     *
     *
     *
     * @param float $effectiveNetDiscount
     * @return $this
     */
    public function setEffectiveNetDiscount($effectiveNetDiscount)
    {
        $this->values['effectiveNetDiscount'] = $effectiveNetDiscount;
        return $this;
    }

    /**
     * Get effectiveNetDiscount
     *
     * @return float
     */
    public function getEffectiveNetDiscount()
    {
        return $this->values['effectiveNetDiscount'];
    }

    /**
     * Set actualRateType
     *
     *
     * Example: PAYOR_ACCOUNT_PACKAGE
     * @param string $actualRateType
     * @return $this
     */
    public function setActualRateType($actualRateType)
    {
        $this->values['actualRateType'] = $actualRateType;
        return $this;
    }

    /**
     * Get actualRateType
     *
     * @return string
     */
    public function getActualRateType()
    {
        return $this->values['actualRateType'];
    }

    /**
     * Set packageRateDetails
     *
     *
     * Example:
     * @param ShipPackageRateDetail[] $packageRateDetails
     * @return $this
     */
    public function setPackageRateDetails(array $packageRateDetails)
    {
        $this->values['packageRateDetails'] = $packageRateDetails;
        return $this;
    }

    /**
     * Get packageRateDetails
     *
     * @return ShipPackageRateDetail[]
     */
    public function getPackageRateDetails()
    {
        return $this->values['packageRateDetails'];
    }
}
