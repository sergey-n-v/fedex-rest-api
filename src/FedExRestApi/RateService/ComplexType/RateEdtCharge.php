<?php
namespace FedExRestApi\RateService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * estimated duties and tax charge
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $alternateHarmonizedCodes
 * @property RateEdtTaxDetail $edtTaxDetail
 * @property string $harmonizedCode

 */
class RateEdtCharge extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateEdtCharge';

    /**
     * Set alternateHarmonizedCodes
     *
     *
     * Example: alternateHarmonizedCodes
     * @param string $alternateHarmonizedCodes
     * @return $this
     */
    public function setAlternateHarmonizedCodes(array $alternateHarmonizedCodes)
    {
        $this->values['alternateHarmonizedCodes'] = $alternateHarmonizedCodes;
        return $this;
    }

    /**
     * Get alternateHarmonizedCodes
     *
     * @return string
     */
    public function getAlternateHarmonizedCodes()
    {
        return $this->values['alternateHarmonizedCodes'];
    }

    /**
     * Set edtTaxDetail
     *
     *
     * Example:
     * @param RateEdtTaxDetail $edtTaxDetail
     * @return $this
     */
    public function setEdtTaxDetail(RateEdtTaxDetail $edtTaxDetail)
    {
        $this->values['edtTaxDetail'] = $edtTaxDetail;
        return $this;
    }

    /**
     * Get edtTaxDetail
     *
     * @return RateEdtTaxDetail
     */
    public function getEdtTaxDetail()
    {
        return $this->values['edtTaxDetail'];
    }

    /**
     * Set harmonizedCode
     *
     *
     * Example: harmonizedCode
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
