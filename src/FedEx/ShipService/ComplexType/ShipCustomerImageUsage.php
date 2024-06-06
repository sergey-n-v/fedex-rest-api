<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the usse and identification of supplied images to be used on this document.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $id
 * @property string $type
 * @property string $providedImageType

 */
class ShipCustomerImageUsage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCustomerImageUsage';

    /**
     * Set id
     *
     * simpleClass: ShipId
     * Example: IMAGE_5
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

    /**
     * Set type
     *
     * simpleClass: ShipType
     * Example: SIGNATURE
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->values['type'] = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->values['type'];
    }

    /**
     * Set providedImageType
     *
     * simpleClass: ShipProvidedImageType
     * Example: SIGNATURE
     * @param string $providedImageType
     * @return $this
     */
    public function setProvidedImageType($providedImageType)
    {
        $this->values['providedImageType'] = $providedImageType;
        return $this;
    }

    /**
     * Get providedImageType
     *
     * @return string
     */
    public function getProvidedImageType()
    {
        return $this->values['providedImageType'];
    }
}
