<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * This is a Return Merchant Authorization (RMA) for the return shipment.<br> Reason for the requirement is mandatory.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $reason

 */
class ShipReturnMerchandiseAuthorization extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipReturnMerchandiseAuthorization';

    /**
     * Set reason
     *
     *
     * Example: Wrong Size or Color
     * @param string $reason
     * @return $this
     */
    public function setReason($reason)
    {
        $this->values['reason'] = $reason;
        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->values['reason'];
    }
}
