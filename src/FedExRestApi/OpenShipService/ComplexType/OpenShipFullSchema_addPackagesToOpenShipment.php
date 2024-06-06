<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements received when a shipment is created.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $index
 * @property OpenShipOpenShipmentAction $shipAction
 * @property OpenShipAccountNumber $accountNumber
 * @property OpenShipRequestedPackageLineItem[] $requestedPackageLineItems

 */
class OpenShipFullSchema_addPackagesToOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_addPackagesToOpenShipment';

    /**
     * This is a unique value assigned to the already created Open Shipment. If this isn’t available then provide the master tracking number.<br>Example: Test1234
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

    /**
     * There are Ship actions as part of processing the shipment.
     *
     *
     * Example: STRONG_VALIDATION
     * @param OpenShipOpenShipmentAction $shipAction
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
     * @return OpenShipOpenShipmentAction
     */
    public function getShipAction()
    {
        return $this->values['shipAction'];
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
     * These are package line item details in the shipment.
     *
     *
     * Example:
     * @param OpenShipRequestedPackageLineItem[] $requestedPackageLineItems
     * @return $this
     */
    public function setRequestedPackageLineItems(array $requestedPackageLineItems)
    {
        $this->values['requestedPackageLineItems'] = $requestedPackageLineItems;
        return $this;
    }

    /**
     * Get requestedPackageLineItems
     *
     * @return OpenShipRequestedPackageLineItem[]
     */
    public function getRequestedPackageLineItems()
    {
        return $this->values['requestedPackageLineItems'];
    }
}
