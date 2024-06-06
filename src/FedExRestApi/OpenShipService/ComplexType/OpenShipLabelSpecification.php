<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are label specification details includes the image type, printer format, and label stock for label. Can also specify specific details such as doc-tab content, regulatory labels, and masking data on the label.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $labelFormatType
 * @property string $labelOrder
 * @property OpenShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail
 * @property OpenShipContactAndAddress $printedLabelOrigin
 * @property string $labelStockType
 * @property string $labelRotation
 * @property string $imageType
 * @property string $labelPrintingOrientation
 * @property boolean $returnedDispositionDetail

 */
class OpenShipLabelSpecification extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipLabelSpecification';

    /**
     * Specify the label Format Type.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * simpleClass: OpenShipLabelFormatType
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
     * This is the order of the Shipping label/documents to be generated.
     *
     * simpleClass: OpenShipLabelOrder
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
     * @param OpenShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail
     * @return $this
     */
    public function setCustomerSpecifiedDetail(OpenShipCustomerSpecifiedLabelDetail $customerSpecifiedDetail)
    {
        $this->values['customerSpecifiedDetail'] = $customerSpecifiedDetail;
        return $this;
    }

    /**
     * Get customerSpecifiedDetail
     *
     * @return OpenShipCustomerSpecifiedLabelDetail
     */
    public function getCustomerSpecifiedDetail()
    {
        return $this->values['customerSpecifiedDetail'];
    }

    /**
     * Specify a contact and address instead of the sender address that will be printed on FedEx label. The sender address will be printed if it is not provided. Using this, you can designate a return address that's different from the sender’s. The destination address must be in the same country as the sender.
     *
     *
     * Example:
     * @param OpenShipContactAndAddress $printedLabelOrigin
     * @return $this
     */
    public function setPrintedLabelOrigin($printedLabelOrigin)
    {
        $this->values['printedLabelOrigin'] = $printedLabelOrigin;
        return $this;
    }

    /**
     * Get printedLabelOrigin
     *
     * @return OpenShipContactAndAddress
     */
    public function getPrintedLabelOrigin()
    {
        return $this->values['printedLabelOrigin'];
    }

    /**
     * Indicate the label stock type used. <br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * simpleClass: OpenShipLabelStockType
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
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * simpleClass: OpenShipLabelRotation
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
     * Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * simpleClass: OpenShipImageType
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
     * This is applicable only to documents produced on thermal printers with roll stock.
     *
     * simpleClass: OpenShipLabelPrintingOrientation
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
     * Specify whether or not the return deposition is needed.
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
