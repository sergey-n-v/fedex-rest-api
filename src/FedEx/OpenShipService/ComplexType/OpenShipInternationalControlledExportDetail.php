<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Use this object to specify International Controlled Export shipment Details.<br>Note: licenseOrPermitExpirationDate and licenseOrPermitNumber are not required when type is WAREHOUSE_WITHDRAWAL.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $licenseOrPermitExpirationDate
 * @property string $licenseOrPermitNumber
 * @property string $entryNumber
 * @property string $foreignTradeZoneCode
 * @property string $type

 */
class OpenShipInternationalControlledExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipInternationalControlledExportDetail';

    /**
     * Indicate the expiration date for the license or permit. The format is YYYY-MM-DD.<br>Example: "2019-12-03"
     *
     * 
     * Example: 2019-12-03
     * @param string $licenseOrPermitExpirationDate
     * @return $this
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->values['licenseOrPermitExpirationDate'] = $licenseOrPermitExpirationDate;
        return $this;
    }

    /**
     * Get licenseOrPermitExpirationDate
     *
     * @return string
     */
    public function getLicenseOrPermitExpirationDate()
    {
        return $this->values['licenseOrPermitExpirationDate'];
    }

    /**
     * Indicate License Or Permit Number for the commodity being exported.<br>Example: 11
     *
     * 
     * Example: 11
     * @param string $licenseOrPermitNumber
     * @return $this
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->values['licenseOrPermitNumber'] = $licenseOrPermitNumber;
        return $this;
    }

    /**
     * Get licenseOrPermitNumber
     *
     * @return string
     */
    public function getLicenseOrPermitNumber()
    {
        return $this->values['licenseOrPermitNumber'];
    }

    /**
     * Indicate Entry Number for the export.<br>Example: 125
     *
     * 
     * Example: 125
     * @param string $entryNumber
     * @return $this
     */
    public function setEntryNumber($entryNumber)
    {
        $this->values['entryNumber'] = $entryNumber;
        return $this;
    }

    /**
     * Get entryNumber
     *
     * @return string
     */
    public function getEntryNumber()
    {
        return $this->values['entryNumber'];
    }

    /**
     * Indicate the Foreign Trade Zone Code.<br>Example: US
     *
     * 
     * Example: US
     * @param string $foreignTradeZoneCode
     * @return $this
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->values['foreignTradeZoneCode'] = $foreignTradeZoneCode;
        return $this;
    }

    /**
     * Get foreignTradeZoneCode
     *
     * @return string
     */
    public function getForeignTradeZoneCode()
    {
        return $this->values['foreignTradeZoneCode'];
    }

    /**
     * Indicate International Controlled Export Type.
     *
     * simpleClass: OpenShipType
     * Example: WAREHOUSE_WITHDRAWAL
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
}
