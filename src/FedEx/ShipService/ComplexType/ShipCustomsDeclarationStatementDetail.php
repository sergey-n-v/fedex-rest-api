<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies about the statements to be declared for Customs.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail

 */
class ShipCustomsDeclarationStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCustomsDeclarationStatementDetail';

    /**
     * Set usmcaLowValueStatementDetail
     *
     * 
     * Example: 
     * @param ShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     * @return $this
     */
    public function setUsmcaLowValueStatementDetail(ShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail)
    {
        $this->values['usmcaLowValueStatementDetail'] = $usmcaLowValueStatementDetail;
        return $this;
    }

    /**
     * Get usmcaLowValueStatementDetail
     *
     * @return ShipUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail()
    {
        return $this->values['usmcaLowValueStatementDetail'];
    }
}
