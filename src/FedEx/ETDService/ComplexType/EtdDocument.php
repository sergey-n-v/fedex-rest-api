<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicate the image reference metadata details.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $referenceId
 * @property string $name
 * @property string $contentType
 * @property EtdDocument_rules $rules
 * @property EtdDocument_meta $meta

 */
class EtdDocument extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDocument';

    /**
     * Set referenceId
     *
     * 
     * Example: 1234
     * @param string $referenceId
     * @return $this
     */
    public function setReferenceId($referenceId)
    {
        $this->values['referenceId'] = $referenceId;
        return $this;
    }

    /**
     * Get referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->values['referenceId'];
    }

    /**
     * Set name
     *
     * 
     * Example: FedExImages.PNG
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
     * 
     * Example: image/png
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
     * Set rules
     *
     * 
     * Example: 
     * @param EtdDocument_rules $rules
     * @return $this
     */
    public function setRules(EtdDocument_rules $rules)
    {
        $this->values['rules'] = $rules;
        return $this;
    }

    /**
     * Get rules
     *
     * @return EtdDocument_rules
     */
    public function getRules()
    {
        return $this->values['rules'];
    }

    /**
     * Set meta
     *
     * 
     * Example: 
     * @param EtdDocument_meta $meta
     * @return $this
     */
    public function setMeta(EtdDocument_meta $meta)
    {
        $this->values['meta'] = $meta;
        return $this;
    }

    /**
     * Get meta
     *
     * @return EtdDocument_meta
     */
    public function getMeta()
    {
        return $this->values['meta'];
    }
}
