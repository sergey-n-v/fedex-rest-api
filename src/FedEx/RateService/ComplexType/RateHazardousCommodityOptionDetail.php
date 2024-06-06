<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $labelTextOption
 * @property string $customerSuppliedLabelText

 */
class RateHazardousCommodityOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateHazardousCommodityOptionDetail';

    /**
     * Set labelTextOption
     *
     * simpleClass: RateLabelTextOption
     * Example: Override
     * @param string $labelTextOption
     * @return $this
     */
    public function setLabelTextOption($labelTextOption)
    {
        $this->values['labelTextOption'] = $labelTextOption;
        return $this;
    }

    /**
     * Get labelTextOption
     *
     * @return string
     */
    public function getLabelTextOption()
    {
        return $this->values['labelTextOption'];
    }

    /**
     * Set customerSuppliedLabelText
     *
     * 
     * Example: LabelText
     * @param string $customerSuppliedLabelText
     * @return $this
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->values['customerSuppliedLabelText'] = $customerSuppliedLabelText;
        return $this;
    }

    /**
     * Get customerSuppliedLabelText
     *
     * @return string
     */
    public function getCustomerSuppliedLabelText()
    {
        return $this->values['customerSuppliedLabelText'];
    }
}
