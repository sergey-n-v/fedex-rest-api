<?php
namespace FedExRestApi\AddressValidationService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Indicates the resolved address parameters.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AddressValidationResolvedAddress[] $resolvedAddresses
 * @property AddressValidationAlert[] $alerts

 */
class AddressValidationAddressResolutionOutputVOV3 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AddressValidationAddressResolutionOutputVOV3';

    /**
     * Indicates the list of resolved addresses. The detailed resolved address includes city, state, postal information, and resolution method.
     *
     *
     * Example:
     * @param AddressValidationResolvedAddress[] $resolvedAddresses
     * @return $this
     */
    public function setResolvedAddresses(array $resolvedAddresses)
    {
        $this->values['resolvedAddresses'] = $resolvedAddresses;
        return $this;
    }

    /**
     * Get resolvedAddresses
     *
     * @return AddressValidationResolvedAddress[]
     */
    public function getResolvedAddresses()
    {
        return $this->values['resolvedAddresses'];
    }

    /**
     * Indicates API Alerts includes alert type, alert code, and alert message that is received when the address is resolved.
     *
     *
     * Example:
     * @param AddressValidationAlert[] $alerts
     * @return $this
     */
    public function setAlerts(array $alerts)
    {
        $this->values['alerts'] = $alerts;
        return $this;
    }

    /**
     * Get alerts
     *
     * @return AddressValidationAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }
}
