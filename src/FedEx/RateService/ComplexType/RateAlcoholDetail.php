<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the alcohol shipment details. This object is mandatory if alcohol special service is selected.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $alcoholRecipientType
 * @property string $shipperAgreementType

 */
class RateAlcoholDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateAlcoholDetail';

    /**
     * Set alcoholRecipientType
     *
     * simpleClass: RateAlcoholRecipientType
     * Example: 
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
