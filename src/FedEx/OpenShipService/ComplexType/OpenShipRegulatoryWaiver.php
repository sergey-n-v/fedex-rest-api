<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the regulatory waiver.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property OpenShipMessage[] $advisories
 * @property string $description
 * @property string $id

 */
class OpenShipRegulatoryWaiver extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRegulatoryWaiver';

    /**
     * Indicates the advisories list.
     *
     * 
     * Example: 
     * @param OpenShipMessage[] $advisories
     * @return $this
     */
    public function setAdvisories(array $advisories)
    {
        $this->values['advisories'] = $advisories;
        return $this;
    }

    /**
     * Get advisories
     *
     * @return OpenShipMessage[]
     */
    public function getAdvisories()
    {
        return $this->values['advisories'];
    }

    /**
     * Indicates the regulatory prohibitions description.<br>Example: description
     *
     * 
     * Example: description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Indicates the prohibitory ID.<br>Example: id
     *
     * 
     * Example: id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->values['id'] = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->values['id'];
    }
}
