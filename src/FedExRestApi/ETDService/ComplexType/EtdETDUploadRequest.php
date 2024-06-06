<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Provide all the document details and shipment meta data.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $workflowName
 * @property string $carrierCode
 * @property string $name
 * @property string $contentType
 * @property EtdMetaObject $meta

 */
class EtdETDUploadRequest extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdETDUploadRequest';

    /**
     * Set workflowName
     *
     * simpleClass: EtdWorkflowName
     * Example: ETDPostShipment
     * @param string $workflowName
     * @return $this
     */
    public function setWorkflowName($workflowName)
    {
        $this->values['workflowName'] = $workflowName;
        return $this;
    }

    /**
     * Get workflowName
     *
     * @return string
     */
    public function getWorkflowName()
    {
        return $this->values['workflowName'];
    }

    /**
     * Set carrierCode
     *
     * simpleClass: EtdCarrierCode
     * Example:
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Set name
     *
     *
     * Example: file.txt
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->values['name'] = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->values['name'];
    }

    /**
     * Set contentType
     *
     * simpleClass: EtdContentType
     * Example: text/plain
     * @param string $contentType
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->values['contentType'] = $contentType;
        return $this;
    }

    /**
     * Get contentType
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->values['contentType'];
    }

    /**
     * Set meta
     *
     *
     * Example:
     * @param EtdMetaObject $meta
     * @return $this
     */
    public function setMeta(EtdMetaObject $meta)
    {
        $this->values['meta'] = $meta;
        return $this;
    }

    /**
     * Get meta
     *
     * @return EtdMetaObject
     */
    public function getMeta()
    {
        return $this->values['meta'];
    }
}
