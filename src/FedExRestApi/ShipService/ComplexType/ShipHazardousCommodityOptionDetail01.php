<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates details of hazardous commodity option detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $labelTextOption
 * @property string $customerSuppliedLabelText

 */
class ShipHazardousCommodityOptionDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipHazardousCommodityOptionDetail01';

    /**
     * Set labelTextOption
     *
     * simpleClass: ShipLabelTextOption
     * Example:
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
     * Example: Customer Supplied Label Text.
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
