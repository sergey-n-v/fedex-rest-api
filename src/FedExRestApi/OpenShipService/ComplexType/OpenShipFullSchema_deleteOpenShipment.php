<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * OpenShipFullSchema_deleteOpenShipment
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $index
 * @property OpenShipAccountNumber $accountNumber

 */
class OpenShipFullSchema_deleteOpenShipment extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_deleteOpenShipment';

    /**
     * This is a unique value for the shipment (must be unique for stand-alone open shipments, or unique within consolidation if consolidation key is provide).<br>Example: Test1234
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
