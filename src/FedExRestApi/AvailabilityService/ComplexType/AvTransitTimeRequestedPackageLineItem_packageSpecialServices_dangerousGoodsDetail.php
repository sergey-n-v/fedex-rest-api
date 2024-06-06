<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Use this object to specify Dangerous Goods shipment Detail.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $accessibility
 * @property string $options

 */
class AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvTransitTimeRequestedPackageLineItem_packageSpecialServices_dangerousGoodsDetail';

    /**
     * Dangerous Goods Accessibility Type. Inaccessible means it does not have to be accessable on the aircraft.  Accessible means it must be fully accessible on the aircraft, and is more strictly controlled.
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
     * Optional

Specify the dangerous goods' detail from the list of available options.
     *
     * simpleClass: AvOptions
     * Example:
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
