<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $labelFormatType
 * @property string $labelOrder
 * @property ShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail
 * @property ShipContactAndAddress $printedLabelOrigin
 * @property string $labelStockType
 * @property string $labelRotation
 * @property string $imageType
 * @property string $labelPrintingOrientation
 * @property boolean $returnedDispositionDetail

 */
class ShipLabelSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipLabelSpecification';

    /**
     * Set labelFormatType
     *
     * simpleClass: ShipLabelFormatType
     * Example: COMMON2D
     * @param string $labelFormatType
     * @return $this
     */
    public function setLabelFormatType($labelFormatType)
    {
        $this->values['labelFormatType'] = $labelFormatType;
        return $this;
    }

    /**
     * Get labelFormatType
     *
     * @return string
     */
    public function getLabelFormatType()
    {
        return $this->values['labelFormatType'];
    }

    /**
     * Set labelOrder
     *
     * simpleClass: ShipLabelOrder
     * Example: SHIPPING_LABEL_FIRST
     * @param string $labelOrder
     * @return $this
     */
    public function setLabelOrder($labelOrder)
    {
        $this->values['labelOrder'] = $labelOrder;
        return $this;
    }

    /**
     * Get labelOrder
     *
     * @return string
     */
    public function getLabelOrder()
    {
        return $this->values['labelOrder'];
    }

    /**
     * Set customerSpecifiedDetail
     *
     * 
     * Example: 
     * @param ShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return $this
     */
    public function setCustomerSpecifiedDetail(ShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->values['customerSpecifiedDetail'] = $customerSpecifiedDetail;
        return $this;
    }

    /**
     * Get customerSpecifiedDetail
     *
     * @return ShipCustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->values['customerSpecifiedDetail'];
    }

    /**
     * Set printedLabelOrigin
     *
     * 
     * Example: 
     * @param ShipContactAndAddress $printedLabelOrigin
     * @return $this
     */
    public function setPrintedLabelOrigin(ShipContactAndAddress $printedLabelOrigin)
    {
        $this->values['printedLabelOrigin'] = $printedLabelOrigin;
        return $this;
    }

    /**
     * Get printedLabelOrigin
     *
     * @return ShipContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
        return $this->values['printedLabelOrigin'];
    }

    /**
     * Set labelStockType
     *
     * simpleClass: ShipLabelStockType
     * Example: PAPER_85X11_TOP_HALF_LABEL
     * @param string $labelStockType
     * @return $this
     */
    public function setLabelStockType($labelStockType)
    {
        $this->values['labelStockType'] = $labelStockType;
        return $this;
    }

    /**
     * Get labelStockType
     *
     * @return string
     */
    public function getLabelStockType()
    {
        return $this->values['labelStockType'];
    }

    /**
     * Set labelRotation
     *
     * simpleClass: ShipLabelRotation
     * Example: UPSIDE_DOWN
     * @param string $labelRotation
     * @return $this
     */
    public function setLabelRotation($labelRotation)
    {
        $this->values['labelRotation'] = $labelRotation;
        return $this;
    }

    /**
     * Get labelRotation
     *
     * @return string
     */
    public function getLabelRotation()
    {
        return $this->values['labelRotation'];
    }

    /**
     * Set imageType
     *
     * simpleClass: ShipImageType
     * Example: PDF
     * @param string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->values['imageType'] = $imageType;
        return $this;
    }

    /**
     * Get imageType
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->values['imageType'];
    }

    /**
     * Set labelPrintingOrientation
     *
     * simpleClass: ShipLabelPrintingOrientation
     * Example: TOP_EDGE_OF_TEXT_FIRST
     * @param string $labelPrintingOrientation
     * @return $this
     */
    public function setLabelPrintingOrientation($labelPrintingOrientation)
    {
        $this->values['labelPrintingOrientation'] = $labelPrintingOrientation;
        return $this;
    }

    /**
     * Get labelPrintingOrientation
     *
     * @return string
     */
    public function getLabelPrintingOrientation()
    {
        return $this->values['labelPrintingOrientation'];
    }

    /**
     * Set returnedDispositionDetail
     *
     * 
     * Example: 1
     * @param boolean $returnedDispositionDetail
     * @return $this
     */
    public function setReturnedDispositionDetail($returnedDispositionDetail)
    {
        $this->values['returnedDispositionDetail'] = $returnedDispositionDetail;
        return $this;
    }

    /**
     * Get returnedDispositionDetail
     *
     * @return boolean
     */
    public function getReturnedDispositionDetail()
    {
        return $this->values['returnedDispositionDetail'];
    }
}
