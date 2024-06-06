<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * RateRatedPackageDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property float $effectiveNetDiscount
 * @property RatePackageRateDetail $packageRateDetail
 * @property int $groupNumber

 */
class RateRatedPackageDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateRatedPackageDetail';

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
     * Set packageRateDetail
     *
     * 
     * Example: 
     * @param RatePackageRateDetail $packageRateDetail
     * @return $this
     */
    public function setPackageRateDetail(RatePackageRateDetail $packageRateDetail)
    {
        $this->values['packageRateDetail'] = $packageRateDetail;
        return $this;
    }

    /**
     * Get packageRateDetail
     *
     * @return RatePackageRateDetail
     */
    public function getPackageRateDetail()
    {
        return $this->values['packageRateDetail'];
    }

    /**
     * Set groupNumber
     *
     * 
     * Example: 10
     * @param int $groupNumber
     * @return $this
     */
    public function setGroupNumber($groupNumber)
    {
        $this->values['groupNumber'] = $groupNumber;
        return $this;
    }

    /**
     * Get groupNumber
     *
     * @return int
     */
    public function getGroupNumber()
    {
        return $this->values['groupNumber'];
    }
}
