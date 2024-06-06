<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements required to create a shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $mergeLabelDocOption
 * @property ShipRequestedShipment $requestedShipment
 * @property string $labelResponseOptions
 * @property ShipShipperAccountNumber $accountNumber
 * @property string $shipAction
 * @property string $processingOptionType
 * @property boolean $oneLabelAtATime

 */
class ShipFull_Schema_Ship extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipFull_Schema_Ship';

    /**
     * Set mergeLabelDocOption
     *
     * simpleClass: ShipMergeLabelDocOption
     * Example: LABELS_AND_DOCS
     * @param string $mergeLabelDocOption
     * @return $this
     */
    public function setMergeLabelDocOption($mergeLabelDocOption)
    {
        $this->values['mergeLabelDocOption'] = $mergeLabelDocOption;
        return $this;
    }

    /**
     * Get mergeLabelDocOption
     *
     * @return string
     */
    public function getMergeLabelDocOption()
    {
        return $this->values['mergeLabelDocOption'];
    }

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param ShipRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(ShipRequestedShipment $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return ShipRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Set labelResponseOptions
     *
     * simpleClass: ShipLabelResponseOptions
     * Example:
     * @param string $labelResponseOptions
     * @return $this
     */
    public function setLabelResponseOptions($labelResponseOptions)
    {
        $this->values['labelResponseOptions'] = $labelResponseOptions;
        return $this;
    }

    /**
     * Get labelResponseOptions
     *
     * @return string
     */
    public function getLabelResponseOptions()
    {
        return $this->values['labelResponseOptions'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param ShipShipperAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber(ShipShipperAccountNumber $accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return ShipShipperAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set shipAction
     *
     * simpleClass: ShipShipAction
     * Example:
     * @param string $shipAction
     * @return $this
     */
    public function setShipAction($shipAction)
    {
        $this->values['shipAction'] = $shipAction;
        return $this;
    }

    /**
     * Get shipAction
     *
     * @return string
     */
    public function getShipAction()
    {
        return $this->values['shipAction'];
    }

    /**
     * Set processingOptionType
     *
     * simpleClass: ShipProcessingOptionType
     * Example:
     * @param string $processingOptionType
     * @return $this
     */
    public function setProcessingOptionType($processingOptionType)
    {
        $this->values['processingOptionType'] = $processingOptionType;
        return $this;
    }

    /**
     * Get processingOptionType
     *
     * @return string
     */
    public function getProcessingOptionType()
    {
        return $this->values['processingOptionType'];
    }

    /**
     * Set oneLabelAtATime
     *
     *
     * Example: 1
     * @param boolean $oneLabelAtATime
     * @return $this
     */
    public function setOneLabelAtATime($oneLabelAtATime)
    {
        $this->values['oneLabelAtATime'] = $oneLabelAtATime;
        return $this;
    }

    /**
     * Get oneLabelAtATime
     *
     * @return boolean
     */
    public function getOneLabelAtATime()
    {
        return $this->values['oneLabelAtATime'];
    }
}
