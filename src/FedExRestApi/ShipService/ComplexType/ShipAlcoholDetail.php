<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are detcontentails for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $alcoholRecipientType
 * @property string $shipperAgreementType

 */
class ShipAlcoholDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipAlcoholDetail';

    /**
     * Set alcoholRecipientType
     *
     * simpleClass: ShipAlcoholRecipientType
     * Example: LICENSEE
     * @param string $alcoholRecipientType
     * @return $this
     */
    public function setAlcoholRecipientType($alcoholRecipientType)
    {
        $this->values['alcoholRecipientType'] = $alcoholRecipientType;
        return $this;
    }

    /**
     * Get alcoholRecipientType
     *
     * @return string
     */
    public function getAlcoholRecipientType()
    {
        return $this->values['alcoholRecipientType'];
    }

    /**
     * Set shipperAgreementType
     *
     *
     * Example: Retailer
     * @param string $shipperAgreementType
     * @return $this
     */
    public function setShipperAgreementType($shipperAgreementType)
    {
        $this->values['shipperAgreementType'] = $shipperAgreementType;
        return $this;
    }

    /**
     * Get shipperAgreementType
     *
     * @return string
     */
    public function getShipperAgreementType()
    {
        return $this->values['shipperAgreementType'];
    }
}
