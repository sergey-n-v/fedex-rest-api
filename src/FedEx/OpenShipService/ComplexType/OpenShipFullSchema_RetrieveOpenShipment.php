<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipFullSchema_RetrieveOpenShipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $index
 * @property OpenShipAccountNumber $accountNumber

 */
class OpenShipFullSchema_RetrieveOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_RetrieveOpenShipment';

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
}
