<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Package-level data required for labeling and/or movement.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $astraHandlingText
 * @property ShipPackageBarcodes $barcodes
 * @property ShipOperationalInstructions[] $operationalInstructions

 */
class ShipPackageOperationalDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipPackageOperationalDetail';

    /**
     * Set astraHandlingText
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
     * @param ShipPackageBarcodes $barcodes
     * @return $this
     */
    public function setBarcodes(ShipPackageBarcodes $barcodes)
    {
        $this->values['barcodes'] = $barcodes;
        return $this;
    }

    /**
     * Get barcodes
     *
     * @return ShipPackageBarcodes
     */
    public function getBarcodes()
    {
        return $this->values['barcodes'];
    }

    /**
     * Set operationalInstructions
     *
     *
     * Example:
     * @param ShipOperationalInstructions[] $operationalInstructions
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
     * @return ShipOperationalInstructions[]
     */
    public function getOperationalInstructions()
    {
        return $this->values['operationalInstructions'];
    }
}
