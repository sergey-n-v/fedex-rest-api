<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This object specifies the meta data such as image type, path and index for the uploaded image file.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $imageType
 * @property string $imageIndex

 */
class EtdImageMetaOutputVO_meta extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdImageMetaOutputVO_meta';

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
