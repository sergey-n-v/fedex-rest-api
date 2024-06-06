<?php
namespace FedExRestApi\ShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

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
class ShipInternationalControlledExportDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipInternationalControlledExportDetail';

    /**
     * Set licenseOrPermitExpirationDate
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
     * Set licenseOrPermitNumber
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
     * Set entryNumber
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
     * Set foreignTradeZoneCode
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
     * Set type
     *
     * simpleClass: ShipType
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
