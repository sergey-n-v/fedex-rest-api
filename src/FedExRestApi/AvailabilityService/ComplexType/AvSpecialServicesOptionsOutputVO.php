<?php
namespace FedExRestApi\AvailabilityService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * The response elements for the special service availability request.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property AvAlert[] $alerts
 * @property AvOptionalServices[] $serviceOptionsList

 */
class AvSpecialServicesOptionsOutputVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvSpecialServicesOptionsOutputVO';

    /**
     * The cxs alert type, alert code, and alert message.
     *
     *
     * Example: [{"code":"code","alertType":"NOTE","message":"alert message"}]
     * @param AvAlert[] $alerts
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
     * @return AvAlert[]
     */
    public function getAlerts()
    {
        return $this->values['alerts'];
    }

    /**
     * The list of options applicable when special service option is selected. The options include:<br>-Service types<br>-Signature options</br>-Package Special services list<br>-Return shipment list<br>-Carrier code<br>-Battery option list<br>-Alert list<br>-Shipment special services ist<br>-Cxs alerts
     *
     *
     * Example:
     * @param AvOptionalServices[] $serviceOptionsList
     * @return $this
     */
    public function setServiceOptionsList(array $serviceOptionsList)
    {
        $this->values['serviceOptionsList'] = $serviceOptionsList;
        return $this;
    }

    /**
     * Get serviceOptionsList
     *
     * @return AvOptionalServices[]
     */
    public function getServiceOptionsList()
    {
        return $this->values['serviceOptionsList'];
    }
}
