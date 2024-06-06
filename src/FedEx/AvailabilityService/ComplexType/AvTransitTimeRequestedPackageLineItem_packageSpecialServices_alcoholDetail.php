<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Provides information about the RecipientType and ShipperAgreementType. This object is manadatory if alcohol special service is selected.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $alcoholRecipientType
 * @property string $shipperAgreementType

 */
class AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_packageSpecialServices_alcoholDetail';

    /**
     * Specify the Alcohol Recipient Type of the shipment. <br> Example:<br> <ul><li> LICENSEE- FedEx approved alchol shipper having appropriate licenses.</li> <li> CONSUMER- Individual consumer to whom the alchol is shipped.</li> </ul>
     *
     * simpleClass: AvAlcoholRecipientType
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
     * Specify the shipper entity type. <br>Example: Fulfillment house, Retailer or a Winery.
     *
     * 
     * Example: retailer
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
