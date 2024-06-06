<?php
namespace FedEx\AvailabilityService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Holds the details of OptionalServices for the SpecialServiceOptions and PackageAndServiceOptions Endpoints
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $serviceType
 * @property boolean $issEnabled
 * @property AvCodeDisplayTextVO[] $signatureOptionsList
 * @property AvPackageSpecialServiceOption[] $packageSpecialServicesList
 * @property string $returnShipmentList
 * @property string $carrierCode
 * @property AvBatteryDetail[] $batteryOptionList
 * @property string $alertList
 * @property AvShipmentSpecialServiceOption[] $shipmentSpecialServicesList
 * @property AvAlert[] $alerts

 */
class AvOptionalServices extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AvOptionalServices';

    /**
     * Indicates the type of service that is used to ship the package.<br>Example: INTERNATIONAL_FIRST<br><a onclick='loadDocReference("servicetypes")'>Click here to see Service Types</a>
     *
     * 
     * Example: INTERNATIONAL_FIRST
     * @param string $serviceType
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->values['serviceType'] = $serviceType;
        return $this;
    }

    /**
     * Get serviceType
     *
     * @return string
     */
    public function getServiceType()
    {
        return $this->values['serviceType'];
    }

    /**
     * Specifies if international signature options are available.
     *
     * 
     * Example: 1
     * @param boolean $issEnabled
     * @return $this
     */
    public function setIssEnabled($issEnabled)
    {
        $this->values['issEnabled'] = $issEnabled;
        return $this;
    }

    /**
     * Get issEnabled
     *
     * @return boolean
     */
    public function getIssEnabled()
    {
        return $this->values['issEnabled'];
    }

    /**
     * All possible signature options if signature options are available.  Indicated by the issEnabled boolean.
     *
     * 
     * Example: [{"displayText":"Indirect Signature","code:":"INDIRECT"}]
     * @param AvCodeDisplayTextVO[] $signatureOptionsList
     * @return $this
     */
    public function setSignatureOptionsList(array $signatureOptionsList)
    {
        $this->values['signatureOptionsList'] = $signatureOptionsList;
        return $this;
    }

    /**
     * Get signatureOptionsList
     *
     * @return AvCodeDisplayTextVO[]
     */
    public function getSignatureOptionsList()
    {
        return $this->values['signatureOptionsList'];
    }

    /**
     * Indicates the list of special services that are available at package level for some or all service types.
     *
     * 
     * Example: [{"displayText":"DANGEROUS_GOODS","subType":"ACCESSIBLE","specialServiceType":"DANGEROUS_GOODS","customerIntegrationMode":"CUSTOM","value":10},{"displayText":"BATTERY","specialServiceType":"BATTERY","subType":"ACCESSIBLE","customerIntegrationMode":"CUSTOM","value":10},{"displayText":"NON_STANDARD_CONTAINER","specialServiceType":"NON_STANDARD_CONTAINER","subType":"ACCESSIBLE","customerIntegrationMode":"STANDARD","value":10},{"displayText":"DRY_ICE","specialServiceType":"DRY_ICE","subType":"ACCESSIBLE","customerIntegrationMode":"CUSTOM","value":10},{"displayText":"DANGEROUS_GOODS","subType":"INACCESSIBLE","specialServiceType":"DANGEROUS_GOODS","customerIntegrationMode\"":"CUSTOM","value":10}]
     * @param AvPackageSpecialServiceOption[] $packageSpecialServicesList
     * @return $this
     */
    public function setPackageSpecialServicesList(array $packageSpecialServicesList)
    {
        $this->values['packageSpecialServicesList'] = $packageSpecialServicesList;
        return $this;
    }

    /**
     * Get packageSpecialServicesList
     *
     * @return AvPackageSpecialServiceOption[]
     */
    public function getPackageSpecialServicesList()
    {
        return $this->values['packageSpecialServicesList'];
    }

    /**
     * Set returnShipmentList
     *
     * simpleClass: AvReturnShipmentList
     * Example: ["EMAIL_LABEL","PRINT_RETURN_LABEL"]
     * @param string $returnShipmentList
     * @return $this
     */
    public function setReturnShipmentList(array $returnShipmentList)
    {
        $this->values['returnShipmentList'] = $returnShipmentList;
        return $this;
    }

    /**
     * Get returnShipmentList
     *
     * @return string
     */
    public function getReturnShipmentList()
    {
        return $this->values['returnShipmentList'];
    }

    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * simpleClass: AvCarrierCode
     * Example: FDXE
     * @param string $carrierCode
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->values['carrierCode'] = $carrierCode;
        return $this;
    }

    /**
     * Get carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->values['carrierCode'];
    }

    /**
     * Indicates the battery option list.
     *
     * 
     * Example: [{"batteryMaterialType":"LITHIUM_METAL","batteryPackingType":"CONTAINED_IN_EQUIPMENT","batteryRegulatoryType":"IATA_SECTION_II"},{"batteryMaterialType":"LITHIUM_METAL","batteryPackingType":"PACKED_WITH_EQUIPMENT","batteryRegulatoryType":"IATA_SECTION_II"},{"batteryMaterialType":"LITHIUM_ION","batteryPackingType":"CONTAINED_IN_EQUIPMENT","batteryRegulatoryType":"IATA_SECTION_II"},{"batteryMaterialType":"LITHIUM_ION","batteryPackingType":"PACKED_WITH_EQUIPMENT","batteryRegulatoryType":"IATA_SECTION_II"}]
     * @param AvBatteryDetail[] $batteryOptionList
     * @return $this
     */
    public function setBatteryOptionList(array $batteryOptionList)
    {
        $this->values['batteryOptionList'] = $batteryOptionList;
        return $this;
    }

    /**
     * Get batteryOptionList
     *
     * @return AvBatteryDetail[]
     */
    public function getBatteryOptionList()
    {
        return $this->values['batteryOptionList'];
    }

    /**
     * Indicates the alert details.
     *
     * 
     * Example: [{"displayText":"FedEx Ground","key":"FEDEX_GROUND"}]
     * @param string $alertList
     * @return $this
     */
    public function setAlertList(array $alertList)
    {
        $this->values['alertList'] = $alertList;
        return $this;
    }

    /**
     * Get alertList
     *
     * @return string
     */
    public function getAlertList()
    {
        return $this->values['alertList'];
    }

    /**
     * Indicates the list of special services that are available at the shipment level for some or all service types.
     *
     * 
     * Example: [{"value":"Returns Clearance","specialServiceType":"RETURNS_CLEARANCE","customerIntegrationMode":"CUSTOM","astraDescription":"RC","subType":"ACCESSIBLE","ltlPaymentTerms":["PREPAID","COLLECT"]},{"value":"Broker Select Option","specialServiceType":"BROKER_SELECT_OPTION","customerIntegrationMode":"CUSTOM","astraDescription":"BSO","subType":"ACCESSIBLE","ltlPaymentTerms":["COLLECT_SECTION_7_SIGNED","COLLECT"]},{"value":"International Mail Service","specialServiceType":"INTERNATIONAL_MAIL_SERVICE","customerIntegrationMode":"CUSTOM","astraDescription":"IMS","subType":"ACCESSIBLE","ltlPaymentTerms":["COLLECT_SECTION_9_SIGNED","COLLECT"]}]
     * @param AvShipmentSpecialServiceOption[] $shipmentSpecialServicesList
     * @return $this
     */
    public function setShipmentSpecialServicesList(array $shipmentSpecialServicesList)
    {
        $this->values['shipmentSpecialServicesList'] = $shipmentSpecialServicesList;
        return $this;
    }

    /**
     * Get shipmentSpecialServicesList
     *
     * @return AvShipmentSpecialServiceOption[]
     */
    public function getShipmentSpecialServicesList()
    {
        return $this->values['shipmentSpecialServicesList'];
    }

    /**
     * Set alerts
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
}
