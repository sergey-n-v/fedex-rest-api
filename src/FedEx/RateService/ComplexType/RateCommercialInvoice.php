<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The Commercial Invoice element is required for electronic upload of CI data. It will serve to create/transmit an electronic Commercial Invoice through the FedEx system.<br>Customers are responsible for printing their own Commercial Invoice.<br>If you would like FedEx to generate a Commercial Invoice and transmit it to Customs for clearance purposes, you need to specify that in the 'ETDDetail/RequesteDocumentCopies' element.<br> Support consists of a Maximum of 99 commodity line items.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $shipmentPurpose

 */
class RateCommercialInvoice extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'RateCommercialInvoice';

    /**
     * Set shipmentPurpose
     *
     * simpleClass: RateShipmentPurpose
     * Example: GIFT
     * @param string $shipmentPurpose
     * @return $this
     */
    public function setShipmentPurpose($shipmentPurpose)
    {
        $this->values['shipmentPurpose'] = $shipmentPurpose;
        return $this;
    }

    /**
     * Get shipmentPurpose
     *
     * @return string
     */
    public function getShipmentPurpose()
    {
        return $this->values['shipmentPurpose'];
    }
}
