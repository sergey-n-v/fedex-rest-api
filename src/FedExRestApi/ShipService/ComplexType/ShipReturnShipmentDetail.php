<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object for specifying return shipment details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipReturnEmailDetail $returnEmailDetail
 * @property ShipReturnMerchandiseAuthorization $rma
 * @property ShipReturnAssociationDetail $returnAssociationDetail
 * @property string $returnType

 */
class ShipReturnShipmentDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipReturnShipmentDetail';

    /**
     * Set returnEmailDetail
     *
     *
     * Example:
     * @param ShipReturnEmailDetail $returnEmailDetail
     * @return $this
     */
    public function setReturnEmailDetail(ShipReturnEmailDetail $returnEmailDetail)
    {
        $this->values['returnEmailDetail'] = $returnEmailDetail;
        return $this;
    }

    /**
     * Get returnEmailDetail
     *
     * @return ShipReturnEmailDetail
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
     * @param ShipReturnMerchandiseAuthorization $rma
     * @return $this
     */
    public function setRma(ShipReturnMerchandiseAuthorization $rma)
    {
        $this->values['rma'] = $rma;
        return $this;
    }

    /**
     * Get rma
     *
     * @return ShipReturnMerchandiseAuthorization
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
     * @param ShipReturnAssociationDetail $returnAssociationDetail
     * @return $this
     */
    public function setReturnAssociationDetail(ShipReturnAssociationDetail $returnAssociationDetail)
    {
        $this->values['returnAssociationDetail'] = $returnAssociationDetail;
        return $this;
    }

    /**
     * Get returnAssociationDetail
     *
     * @return ShipReturnAssociationDetail
     */
    public function getReturnAssociationDetail()
    {
        return $this->values['returnAssociationDetail'];
    }

    /**
     * Set returnType
     *
     * simpleClass: ShipReturnType
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
