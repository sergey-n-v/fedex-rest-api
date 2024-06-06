<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specifies about the statements to be declared for Customs.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail

 */
class OpenShipCustomsDeclarationStatementDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCustomsDeclarationStatementDetail';

    /**
     * Set usmcaLowValueStatementDetail
     *
     *
     * Example:
     * @param OpenShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail
     * @return $this
     */
    public function setUsmcaLowValueStatementDetail(OpenShipUsmcaLowValueStatementDetail $usmcaLowValueStatementDetail)
    {
        $this->values['usmcaLowValueStatementDetail'] = $usmcaLowValueStatementDetail;
        return $this;
    }

    /**
     * Get usmcaLowValueStatementDetail
     *
     * @return OpenShipUsmcaLowValueStatementDetail
     */
    public function getUsmcaLowValueStatementDetail()
    {
        return $this->values['usmcaLowValueStatementDetail'];
    }
}
