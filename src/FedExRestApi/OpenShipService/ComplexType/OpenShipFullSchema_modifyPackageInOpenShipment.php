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
 * @property OpenShipRequestedPackageLineItem $requestedPackageLineItem
 * @property string $index
 * @property string $shipAction
 * @property OpenShipAccountNumber $accountNumber
 * @property OpenShipTrackingId $trackingId

 */
class OpenShipFullSchema_modifyPackageInOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_modifyPackageInOpenShipment';

    /**
     * Contains the data for the package that is to be modified in the open shipment.
     *
     *
     * Example:
     * @param OpenShipRequestedPackageLineItem $requestedPackageLineItem
     * @return $this
     */
    public function setRequestedPackageLineItem($requestedPackageLineItem)
    {
        $this->values['requestedPackageLineItem'] = $requestedPackageLineItem;
        return $this;
    }

    /**
     * Get requestedPackageLineItem
     *
     * @return OpenShipRequestedPackageLineItem
     */
    public function getRequestedPackageLineItem()
    {
        return $this->values['requestedPackageLineItem'];
    }

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
     * Allowed values are STRONG_VALIDATION
     *
     *
     * Example: STRONG_VALIDATION
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
     * @return OpenShipOpenShipAction
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
     * Set trackingId
     *
     *
     * Example:
     * @param OpenShipTrackingId $trackingId
     * @return $this
     */
    public function setTrackingId(OpenShipTrackingId $trackingId)
    {
        $this->values['trackingId'] = $trackingId;
        return $this;
    }

    /**
     * Get trackingId
     *
     * @return OpenShipTrackingId
     */
    public function getTrackingId()
    {
        return $this->values['trackingId'];
    }
}
