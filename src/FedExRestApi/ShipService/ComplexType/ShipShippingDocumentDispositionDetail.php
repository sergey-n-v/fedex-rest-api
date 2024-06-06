<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are document diposition details. Each occurrence of this class specifies a particular way in which a kind of shipping document is to be produced and provided.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipShippingDocumentEmailDetail $eMailDetail
 * @property string $dispositionType

 */
class ShipShippingDocumentDispositionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipShippingDocumentDispositionDetail';

    /**
     * Set eMailDetail
     *
     *
     * Example:
     * @param ShipShippingDocumentEmailDetail $eMailDetail
     * @return $this
     */
    public function setEMailDetail(ShipShippingDocumentEmailDetail $eMailDetail)
    {
        $this->values['eMailDetail'] = $eMailDetail;
        return $this;
    }

    /**
     * Get eMailDetail
     *
     * @return ShipShippingDocumentEmailDetail
     */
    public function getEMailDetail()
    {
        return $this->values['eMailDetail'];
    }

    /**
     * Set dispositionType
     *
     * simpleClass: ShipDispositionType
     * Example: CONFIRMED
     * @param string $dispositionType
     * @return $this
     */
    public function setDispositionType($dispositionType)
    {
        $this->values['dispositionType'] = $dispositionType;
        return $this;
    }

    /**
     * Get dispositionType
     *
     * @return string
     */
    public function getDispositionType()
    {
        return $this->values['dispositionType'];
    }
}
