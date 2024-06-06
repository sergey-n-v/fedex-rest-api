<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Package-level data required for labeling and/or movement.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $astraHandlingText
 * @property OpenShipPackageBarcodes $barcodes
 * @property OpenShipOperationalInstructions[] $operationalInstructions

 */
class OpenShipPackageOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipPackageOperationalDetail';

    /**
     * This is human-readable astra handling text.
     *
     * 
     * Example: astraHandlingText
     * @param string $astraHandlingText
     * @return $this
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->values['astraHandlingText'] = $astraHandlingText;
        return $this;
    }

    /**
     * Get astraHandlingText
     *
     * @return string
     */
    public function getAstraHandlingText()
    {
        return $this->values['astraHandlingText'];
    }

    /**
     * Set barcodes
     *
     * 
     * Example: 
     * @param OpenShipPackageBarcodes $barcodes
     * @return $this
     */
    public function setBarcodes(OpenShipPackageBarcodes $barcodes)
    {
        $this->values['barcodes'] = $barcodes;
        return $this;
    }

    /**
     * Get barcodes
     *
     * @return OpenShipPackageBarcodes
     */
    public function getBarcodes()
    {
        return $this->values['barcodes'];
    }

    /**
     * These are operational instruction such as Ground Information printed on a given area of the label, one-dimensional barcode with only x-axis that contains the details of the shipment in encrypted form, COD Return operational instructions data such as COD amount, SECURED or UNSECURED.
     *
     * 
     * Example: 
     * @param OpenShipOperationalInstructions[] $operationalInstructions
     * @return $this
     */
    public function setOperationalInstructions(array $operationalInstructions)
    {
        $this->values['operationalInstructions'] = $operationalInstructions;
        return $this;
    }

    /**
     * Get operationalInstructions
     *
     * @return OpenShipOperationalInstructions[]
     */
    public function getOperationalInstructions()
    {
        return $this->values['operationalInstructions'];
    }
}
