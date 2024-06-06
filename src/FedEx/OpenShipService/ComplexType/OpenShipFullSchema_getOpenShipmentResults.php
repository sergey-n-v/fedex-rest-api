<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipFullSchema_getOpenShipmentResults
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $resultMethodType
 * @property string $jobId
 * @property OpenShipAccountNumber $accountNumber

 */
class OpenShipFullSchema_getOpenShipmentResults extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipFullSchema_getOpenShipmentResults';

    /**
     * The use of this method is to retrieve the results of the CREATE, MODIFY and CONFIRM events of Asynchronous flow.<br><ul><li>CREATE- Customer will create Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Create OpenShipment.</li><li>MODIFY- Customer will modify Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Modify OpenShipment.</li><li>CONFIRM- Customer will confirm Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Confirm OpenShipment.</li></ul>
     *
     * simpleClass: OpenShipResultMethodType
     * Example: 
     * @param string $resultMethodType
     * @return $this
     */
    public function setResultMethodType($resultMethodType)
    {
        $this->values['resultMethodType'] = $resultMethodType;
        return $this;
    }

    /**
     * Get resultMethodType
     *
     * @return string
     */
    public function getResultMethodType()
    {
        return $this->values['resultMethodType'];
    }

    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.<br> Example: '89sxxxxx233ae24ff31xxxxx'
     *
     * 
     * Example: 89sxxxxx233ae24ff31xxxxx
     * @param string $jobId
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->values['jobId'] = $jobId;
        return $this;
    }

    /**
     * Get jobId
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->values['jobId'];
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
