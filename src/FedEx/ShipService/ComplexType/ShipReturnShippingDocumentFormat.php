<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are characteristics of a shipping document to be produced.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property boolean $provideInstructions
 * @property ShipDocumentFormatOptionsRequested $optionsRequested
 * @property string $stockType
 * @property ShipShippingDocumentDispositionDetail[] $dispositions
 * @property string $locale
 * @property string $docType

 */
class ShipReturnShippingDocumentFormat extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipReturnShippingDocumentFormat';

    /**
     * Set provideInstructions
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
     * @param ShipDocumentFormatOptionsRequested $optionsRequested
     * @return $this
     */
    public function setOptionsRequested(ShipDocumentFormatOptionsRequested $optionsRequested)
    {
        $this->values['optionsRequested'] = $optionsRequested;
        return $this;
    }

    /**
     * Get optionsRequested
     *
     * @return ShipDocumentFormatOptionsRequested
     */
    public function getOptionsRequested()
    {
        return $this->values['optionsRequested'];
    }

    /**
     * Set stockType
     *
     * simpleClass: ShipStockType
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
     * Set dispositions
     *
     * 
     * Example: 
     * @param ShipShippingDocumentDispositionDetail[] $dispositions
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
     * @return ShipShippingDocumentDispositionDetail[]
     */
    public function getDispositions()
    {
        return $this->values['dispositions'];
    }

    /**
     * Set locale
     *
     * 
     * Example: en_US"
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
     * Set docType
     *
     * simpleClass: ShipDocType
     * Example: PNG
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
