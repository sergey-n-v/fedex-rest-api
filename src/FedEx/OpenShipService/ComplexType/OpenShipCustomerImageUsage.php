<?php
namespace FedEx\OpenShipService\ComplexType;

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
class OpenShipCustomerImageUsage extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCustomerImageUsage';

    /**
     * Specify the Image ID.
     *
     * simpleClass: OpenShipId
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
     * Specify document image type.
     *
     * simpleClass: OpenShipType
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
     * Specify the provided document image type.
     *
     * simpleClass: OpenShipProvidedImageType
     * Example: LETTER_HEAD
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
