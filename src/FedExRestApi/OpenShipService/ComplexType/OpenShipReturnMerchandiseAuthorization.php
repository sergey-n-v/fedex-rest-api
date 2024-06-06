<?php
namespace FedExRestApi\OpenShipService\ComplexType;

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
class OpenShipReturnMerchandiseAuthorization extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipReturnMerchandiseAuthorization';

    /**
     * Specify the reason for the return.<br> Note: There is no validation for reason. Recommended length is 60 alpha-numeric characters<br>Example: Wrong color or size.
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
