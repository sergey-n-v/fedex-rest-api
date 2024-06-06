<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are details for the package containing alcohol. This is required for alcohol special service. The alcoholRecipientType is required.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $alcoholRecipientType
 * @property string $shipperAgreementType

 */
class AvAlcoholDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvAlcoholDetail';

    /**
     * Specify the Alcohol Recipient Type of the shipment. <br> Example: <br> <ul><li>LICENSEE- FedEx approved alchol shipper having appropriate licenses. </li><li> CONSUMER- Individual consumer to whom the alchol is shipped.</li></ul>
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
     * Specify the type of entity, the shipper for alcohol shipment is registered such as fulfillment house, retailer or a winery.
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
