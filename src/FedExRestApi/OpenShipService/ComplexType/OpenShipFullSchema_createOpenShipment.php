<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The request elements required to create a Openshipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipOpenshipmentRequestedShipment $requestedShipment
 * @property OpenShipAccountNumber $accountNumber
 * @property string $openShipmentAction
 * @property string $index

 */
class OpenShipFullSchema_createOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_createOpenShipment';

    /**
     * Set requestedShipment
     *
     *
     * Example:
     * @param OpenShipOpenshipmentRequestedShipment $requestedShipment
     * @return $this
     */
    public function setRequestedShipment(OpenShipOpenshipmentRequestedShipment $requestedShipment)
    {
        $this->values['requestedShipment'] = $requestedShipment;
        return $this;
    }

    /**
     * Get requestedShipment
     *
     * @return OpenShipOpenshipmentRequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->values['requestedShipment'];
    }

    /**
     * Set accountNumber
     *
     *
     * Example:
     * @param OpenShipPartyAccountNumber $accountNumber
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->values['accountNumber'] = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return OpenShipPartyAccountNumber
     */
    public function getAccountNumber()
    {
        return $this->values['accountNumber'];
    }

    /**
     * Set openShipmentAction
     *
     * simpleClass: OpenShipOpenShipmentAction
     * Example:
     * @param string $openShipmentAction
     * @return $this
     */
    public function setOpenShipmentAction($openShipmentAction)
    {
        $this->values['openShipmentAction'] = $openShipmentAction;
        return $this;
    }

    /**
     * Get openShipmentAction
     *
     * @return string
     */
    public function getOpenShipmentAction()
    {
        return $this->values['openShipmentAction'];
    }

    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Note: If index is not provided while create open shipment then the master tracking id of create open ship will act as index for the shipment.<br>Example: Test1234
     *
     *
     * Example: Test1234
     * @param string $index
     * @return $this
     */
    public function setIndex($index)
    {
        $this->values['index'] = $index;
        return $this;
    }

    /**
     * Get index
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->values['index'];
    }
}
