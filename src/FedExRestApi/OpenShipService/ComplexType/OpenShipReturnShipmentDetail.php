<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object for specifying return shipment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipReturnEmailDetail $returnEmailDetail
 * @property OpenShipReturnMerchandiseAuthorization $rma
 * @property OpenShipReturnAssociationDetail $returnAssociationDetail
 * @property string $returnType

 */
class OpenShipReturnShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipReturnShipmentDetail';

    /**
     * Set returnEmailDetail
     *
     *
     * Example:
     * @param OpenShipReturnEmailDetail $returnEmailDetail
     * @return $this
     */
    public function setReturnEmailDetail(OpenShipReturnEmailDetail $returnEmailDetail)
    {
        $this->values['returnEmailDetail'] = $returnEmailDetail;
        return $this;
    }

    /**
     * Get returnEmailDetail
     *
     * @return OpenShipReturnEmailDetail
     */
    public function getReturnEmailDetail()
    {
        return $this->values['returnEmailDetail'];
    }

    /**
     * Set rma
     *
     *
     * Example:
     * @param OpenShipReturnMerchandiseAuthorization $rma
     * @return $this
     */
    public function setRma(OpenShipReturnMerchandiseAuthorization $rma)
    {
        $this->values['rma'] = $rma;
        return $this;
    }

    /**
     * Get rma
     *
     * @return OpenShipReturnMerchandiseAuthorization
     */
    public function getRma()
    {
        return $this->values['rma'];
    }

    /**
     * Set returnAssociationDetail
     *
     *
     * Example:
     * @param OpenShipReturnAssociationDetail $returnAssociationDetail
     * @return $this
     */
    public function setReturnAssociationDetail(OpenShipReturnAssociationDetail $returnAssociationDetail)
    {
        $this->values['returnAssociationDetail'] = $returnAssociationDetail;
        return $this;
    }

    /**
     * Get returnAssociationDetail
     *
     * @return OpenShipReturnAssociationDetail
     */
    public function getReturnAssociationDetail()
    {
        return $this->values['returnAssociationDetail'];
    }

    /**
     * This is the return Type. Required to be set to PRINT_RETURN_LABEL for printed return label shipments. For email return label shipments returnType must be set to PENDING and pendingShipmentDetail must be set to EMAIL.
     *
     * simpleClass: OpenShipReturnType
     * Example: PRINT_RETURN_LABEL
     * @param string $returnType
     * @return $this
     */
    public function setReturnType($returnType)
    {
        $this->values['returnType'] = $returnType;
        return $this;
    }

    /**
     * Get returnType
     *
     * @return string
     */
    public function getReturnType()
    {
        return $this->values['returnType'];
    }
}
