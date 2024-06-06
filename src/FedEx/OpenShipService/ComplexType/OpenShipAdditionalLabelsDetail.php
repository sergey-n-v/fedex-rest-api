<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * OpenShipAdditionalLabelsDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property int $count

 */
class OpenShipAdditionalLabelsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipAdditionalLabelsDetail';

    /**
     * Specify the type of additional  details to be added on the label.
     *
     * simpleClass: OpenShipType
     * Example: CONSIGNEE
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
     * Specifies the count of label to return.
     *
     * 
     * Example: 1
     * @param int $count
     * @return $this
     */
    public function setCount($count)
    {
        $this->values['count'] = $count;
        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->values['count'];
    }
}
