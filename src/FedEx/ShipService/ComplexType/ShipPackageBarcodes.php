<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are package barcode details. Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipBinaryBarcode[] $binaryBarcodes
 * @property ShipStringBarcode[] $stringBarcodes

 */
class ShipPackageBarcodes extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageBarcodes';

    /**
     * Set binaryBarcodes
     *
     * 
     * Example: 
     * @param ShipBinaryBarcode[] $binaryBarcodes
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
     * @return ShipBinaryBarcode[]
     */
    public function getBinaryBarcodes()
    {
        return $this->values['binaryBarcodes'];
    }

    /**
     * Set stringBarcodes
     *
     * 
     * Example: 
     * @param ShipStringBarcode[] $stringBarcodes
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
     * @return ShipStringBarcode[]
     */
    public function getStringBarcodes()
    {
        return $this->values['stringBarcodes'];
    }
}
