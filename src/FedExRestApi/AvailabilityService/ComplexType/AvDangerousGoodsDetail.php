<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to provide Dangerous Goods Detail in the shipment.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $accessibility
 * @property string $options

 */
class AvDangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvDangerousGoodsDetail';

    /**
     * Specify the Dangerous Goods Accessibility Type. Valid Values: <ul><li>INACCESSIBLE - It does not have to be accessible on the aircraft.</li><li>ACCESSIBLE - It must be fully accessible on the aircraft, and is more strictly controlled.</li></ul>
     *
     * simpleClass: AvAccessibility
     * Example: ACCESSIBLE
     * @param string $accessibility
     * @return $this
     */
    public function setAccessibility($accessibility)
    {
        $this->values['accessibility'] = $accessibility;
        return $this;
    }

    /**
     * Get accessibility
     *
     * @return string
     */
    public function getAccessibility()
    {
        return $this->values['accessibility'];
    }

    /**
     * Indicate the kind of content being reported.
     *
     * simpleClass: AvOptions
     * Example: ["HAZARDOUS_MATERIALS","LIMITED_QUANTITIES_COMMODITIES"]
     * @param string $options
     * @return $this
     */
    public function setOptions(array $options)
    {
        $this->values['options'] = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->values['options'];
    }
}
