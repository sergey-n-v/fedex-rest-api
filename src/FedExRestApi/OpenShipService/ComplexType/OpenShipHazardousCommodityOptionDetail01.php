<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
class OpenShipHazardousCommodityOptionDetail01 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipHazardousCommodityOptionDetail01';

    /**
     * Indicates the label text option.
     *
     * simpleClass: OpenShipLabelTextOption
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
     * 'DG Data Upload Mode:- Optional.,DG Full Validation Mode:- Optional,Text used in labeling the commodity under control of the LabelTextOption field<br>Example:Customer Supplied Label Text'
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
