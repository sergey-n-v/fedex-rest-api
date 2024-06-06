<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify the shipping document format.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $provideInstructions
 * @property OpenShipDocumentFormatOptionsRequested $optionsRequested
 * @property string $stockType
 * @property OpenShipShippingDocumentDispositionDetail[] $dispositions
 * @property string $locale
 * @property string $docType

 */
class OpenShipShippingDocumentFormat extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipShippingDocumentFormat';

    /**
     * Indicates whether or not to provide the instructions.
     *
     *
     * Example: 1
     * @param boolean $provideInstructions
     * @return $this
     */
    public function setProvideInstructions($provideInstructions)
    {
        $this->values['provideInstructions'] = $provideInstructions;
        return $this;
    }

    /**
     * Get provideInstructions
     *
     * @return boolean
     */
    public function getProvideInstructions()
    {
        return $this->values['provideInstructions'];
    }

    /**
     * Set optionsRequested
     *
     *
     * Example:
     * @param OpenShipDocumentFormatOptionsRequested $optionsRequested
     * @return $this
     */
    public function setOptionsRequested(OpenShipDocumentFormatOptionsRequested $optionsRequested)
    {
        $this->values['optionsRequested'] = $optionsRequested;
        return $this;
    }

    /**
     * Get optionsRequested
     *
     * @return OpenShipDocumentFormatOptionsRequested
     */
    public function getOptionsRequested()
    {
        return $this->values['optionsRequested'];
    }

    /**
     * Indicate the used label stock type. Note to list the correct type of paper for the freight address label option.
     *
     * simpleClass: OpenShipStockType
     * Example: PAPER_LETTER
     * @param string $stockType
     * @return $this
     */
    public function setStockType($stockType)
    {
        $this->values['stockType'] = $stockType;
        return $this;
    }

    /**
     * Get stockType
     *
     * @return string
     */
    public function getStockType()
    {
        return $this->values['stockType'];
    }

    /**
     * Specifies how to create, organize, and return the document
     *
     *
     * Example:
     * @param OpenShipShippingDocumentDispositionDetail[] $dispositions
     * @return $this
     */
    public function setDispositions(array $dispositions)
    {
        $this->values['dispositions'] = $dispositions;
        return $this;
    }

    /**
     * Get dispositions
     *
     * @return OpenShipShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
        return $this->values['dispositions'];
    }

    /**
     * These are locale details.<br>example: 'en_US'<br><a onclick='loadDocReference("locales")'>click here to see Locales</a><br>Note: If the locale is left blank or an invalid locale is entered, an error message is returned in response.
     *
     *
     * Example: en_US
     * @param string $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->values['locale'] = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->values['locale'];
    }

    /**
     * Specify the image format used for a shipping document.<br><a onclick='loadDocReference("labelstocktypes")'>click here to see label format types</a>
     *
     * simpleClass: OpenShipDocType
     * Example: PDF
     * @param string $docType
     * @return $this
     */
    public function setDocType($docType)
    {
        $this->values['docType'] = $docType;
        return $this;
    }

    /**
     * Get docType
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->values['docType'];
    }
}
