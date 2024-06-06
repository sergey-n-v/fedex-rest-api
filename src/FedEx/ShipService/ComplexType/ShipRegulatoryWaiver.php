<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Indicates the regulatory waiver.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property ShipMessage[] $advisories
 * @property string $description
 * @property string $id

 */
class ShipRegulatoryWaiver extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipRegulatoryWaiver';

    /**
     * Set advisories
     *
     * 
     * Example: 
     * @param ShipMessage[] $advisories
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
     * @return ShipMessage[]
     */
    public function getAdvisories()
    {
        return $this->values['advisories'];
    }

    /**
     * Set description
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
     * Set id
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
