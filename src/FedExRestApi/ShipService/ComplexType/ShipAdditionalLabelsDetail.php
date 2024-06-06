<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * ShipAdditionalLabelsDetail
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $type
 * @property int $count

 */
class ShipAdditionalLabelsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipAdditionalLabelsDetail';

    /**
     * Set type
     *
     * simpleClass: ShipType
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
     * Set count
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
