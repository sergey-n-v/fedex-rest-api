<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This class groups together all package-level rate data for a single package (across all rate types) as part of the response to a shipping request, which groups shipment-level data together and groups package-level data by package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $effectiveNetDiscount
 * @property string $actualRateType
 * @property OpenShipPackageRateDetail[] $packageRateDetails

 */
class OpenShipPackageRating extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPackageRating';

    /**
     * This is the difference between the list and account net charge.<br>Example: 0.0
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
     * This is the actual rate type. It identifies which entry in the following array is considered as presenting the actual rates for the package.<br>Example: PAYOR_ACCOUNT_PACKAGE
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
     * Data for a package's rates, as calculated per a specific rate type.
     *
     * 
     * Example: 
     * @param OpenShipPackageRateDetail[] $packageRateDetails
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
     * @return OpenShipPackageRateDetail[]
     */
    public function getPackageRateDetails()
    {
        return $this->values['packageRateDetails'];
    }
}
