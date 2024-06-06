<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipBinaryBarcode[] $binaryBarcodes
 * @property OpenShipStringBarcode[] $stringBarcodes

 */
class OpenShipPackageBarcodes extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPackageBarcodes';

    /**
     * This is binary-style barcodes for the package.
     *
     * 
     * Example: 
     * @param OpenShipBinaryBarcode[] $binaryBarcodes
     * @return $this
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->values['binaryBarcodes'] = $binaryBarcodes;
        return $this;
    }

    /**
     * Get binaryBarcodes
     *
     * @return OpenShipBinaryBarcode[]
     */
    public function getBinaryBarcodes()
    {
        return $this->values['binaryBarcodes'];
    }

    /**
     * This is string-style barcodes for the package.
     *
     * 
     * Example: 
     * @param OpenShipStringBarcode[] $stringBarcodes
     * @return $this
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->values['stringBarcodes'] = $stringBarcodes;
        return $this;
    }

    /**
     * Get stringBarcodes
     *
     * @return OpenShipStringBarcode[]
     */
    public function getStringBarcodes()
    {
        return $this->values['stringBarcodes'];
    }
}
