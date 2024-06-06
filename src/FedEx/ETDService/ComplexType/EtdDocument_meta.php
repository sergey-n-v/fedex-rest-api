<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify image meta data such as image type, path and index for the file to be uploaded.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $imageType
 * @property string $imageIndex

 */
class EtdDocument_meta extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdDocument_meta';

    /**
     * Set imageType
     *
     * 
     * Example: SIGNATURE
     * @param string $imageType
     * @return $this
     */
    public function setImageType($imageType)
    {
        $this->values['imageType'] = $imageType;
        return $this;
    }

    /**
     * Get imageType
     *
     * @return string
     */
    public function getImageType()
    {
        return $this->values['imageType'];
    }

    /**
     * Set imageIndex
     *
     * 
     * Example: IMAGE_1
     * @param string $imageIndex
     * @return $this
     */
    public function setImageIndex($imageIndex)
    {
        $this->values['imageIndex'] = $imageIndex;
        return $this;
    }

    /**
     * Get imageIndex
     *
     * @return string
     */
    public function getImageIndex()
    {
        return $this->values['imageIndex'];
    }
}
