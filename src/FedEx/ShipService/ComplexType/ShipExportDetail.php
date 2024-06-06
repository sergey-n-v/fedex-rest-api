<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are export Detail used for US or CA exports.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipDestinationControlDetail $destinationControlDetail
 * @property string $b13AFilingOption
 * @property string $exportComplianceStatement
 * @property string $permitNumber

 */
class ShipExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipExportDetail';

    /**
     * Set destinationControlDetail
     *
     * 
     * Example: 
     * @param ShipDestinationControlDetail $destinationControlDetail
     * @return $this
     */
    public function setDestinationControlDetail(ShipDestinationControlDetail $destinationControlDetail)
    {
        $this->values['destinationControlDetail'] = $destinationControlDetail;
        return $this;
    }

    /**
     * Get destinationControlDetail
     *
     * @return ShipDestinationControlDetail
     */
    public function getDestinationControlDetail()
    {
        return $this->values['destinationControlDetail'];
    }

    /**
     * Set b13AFilingOption
     *
     * simpleClass: ShipB13AFilingOption
     * Example: NOT_REQUIRED
     * @param string $b13AFilingOption
     * @return $this
     */
    public function setB13AFilingOption($b13AFilingOption)
    {
        $this->values['b13AFilingOption'] = $b13AFilingOption;
        return $this;
    }

    /**
     * Get b13AFilingOption
     *
     * @return string
     */
    public function getB13AFilingOption()
    {
        return $this->values['b13AFilingOption'];
    }

    /**
     * Set exportComplianceStatement
     *
     * 
     * Example: 12345678901234567
     * @param string $exportComplianceStatement
     * @return $this
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->values['exportComplianceStatement'] = $exportComplianceStatement;
        return $this;
    }

    /**
     * Get exportComplianceStatement
     *
     * @return string
     */
    public function getExportComplianceStatement()
    {
        return $this->values['exportComplianceStatement'];
    }

    /**
     * Set permitNumber
     *
     * 
     * Example: 12345
     * @param string $permitNumber
     * @return $this
     */
    public function setPermitNumber($permitNumber)
    {
        $this->values['permitNumber'] = $permitNumber;
        return $this;
    }

    /**
     * Get permitNumber
     *
     * @return string
     */
    public function getPermitNumber()
    {
        return $this->values['permitNumber'];
    }
}
