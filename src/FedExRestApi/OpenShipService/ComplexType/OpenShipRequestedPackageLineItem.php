<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * These are one or more package-attribute descriptions, each of which describes an individual package, a group of identical packages, or (for the total-piece-total-weight case) common characteristics of all packages in the shipment.<ul><li>At least one instance containing the weight for at least one package is required for EXPRESS and GROUND shipments.</li><li>Single piece requests will have one RequestedPackageLineItem.</li><li>Multiple piece requests will have multiple RequestedPackageLineItems.</li><li>Maximum occurrences is 30.</li></ul>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $sequenceNumber
 * @property string $subPackagingType
 * @property OpenShipCustomerReference_1[] $customerReferences
 * @property OpenShipMoney $declaredValue
 * @property OpenShipWeight $weight
 * @property OpenShipDimensions $dimensions
 * @property int $groupPackageCount
 * @property string $itemDescriptionForClearance
 * @property OpenShipContentRecord[] $contentRecord
 * @property string $itemDescription
 * @property OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail
 * @property OpenShipPackageSpecialServicesRequested $packageSpecialServices

 */
class OpenShipRequestedPackageLineItem extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipRequestedPackageLineItem';

    /**
     * Optional. <br>Used only with individual packages as a unique identifier of each requested package. Will be adjusted at the shipment level as pieces are added.
     *
     *
     * Example: 1
     * @param string $sequenceNumber
     * @return $this
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->values['sequenceNumber'] = $sequenceNumber;
        return $this;
    }

    /**
     * Get sequenceNumber
     *
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->values['sequenceNumber'];
    }

    /**
     * Indicate the subPackagingType, if you are using your own packaging for the shipment. Use it for all shipments inbound to Canada (CA) and inbound shipments to the U.S. and Puerto Rico (PR) from Canada and Mexico (MX).subPackagingType is mandatory for shipments to Canada.<br>Example: TUBE, CARTON, CONTAINER. etc.<br>Note: If the value is TUBE, a non-machinable surcharge will be applicable for SmartPost shipments.<br><a onclick='loadDocReference("subpackagetypes")'>click here to see Sub-Packaging Types</a><br>For more information on physical packaging or packaging regulatory requirements, contact your FedEx representative.
     *
     *
     * Example: BUCKET
     * @param string $subPackagingType
     * @return $this
     */
    public function setSubPackagingType($subPackagingType)
    {
        $this->values['subPackagingType'] = $subPackagingType;
        return $this;
    }

    /**
     * Get subPackagingType
     *
     * @return string
     */
    public function getSubPackagingType()
    {
        return $this->values['subPackagingType'];
    }

    /**
     * These are additional customer reference data.<br>Note: The groupPackageCount must be specified to retrieve customer references.
     *
     *
     * Example:
     * @param OpenShipCustomerReference_1[] $customerReferences
     * @return $this
     */
    public function setCustomerReferences(array $customerReferences)
    {
        $this->values['customerReferences'] = $customerReferences;
        return $this;
    }

    /**
     * Get customerReferences
     *
     * @return OpenShipCustomerReference_1[]
     */
    public function getCustomerReferences()
    {
        return $this->values['customerReferences'];
    }

    /**
     * This is the Declared Value of any shipment which represents FedEx maximum liability associated with a shipment. This is including, but not limited to any loss, damage, delay, misdelivery, any failure to provide information, or misdelivery of information related to the Shipment.
     *
     *
     * Example:
     * @param OpenShipMoney $declaredValue
     * @return $this
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->values['declaredValue'] = $declaredValue;
        return $this;
    }

    /**
     * Get declaredValue
     *
     * @return OpenShipMoney
     */
    public function getDeclaredValue()
    {
        return $this->values['declaredValue'];
    }

    /**
     * Set weight
     *
     *
     * Example:
     * @param OpenShipWeight $weight
     * @return $this
     */
    public function setWeight(OpenShipWeight $weight)
    {
        $this->values['weight'] = $weight;
        return $this;
    }

    /**
     * Get weight
     *
     * @return OpenShipWeight
     */
    public function getWeight()
    {
        return $this->values['weight'];
    }

    /**
     * Indicate the dimensions of the package.<br> Following conditions will apply: <ul><li>Dimensions are optional but when added, then all three dimensions must be indicated.</li><li>Dimensions are required when using a Express freight service.</li></ul>Note: The maximum/minimum dimension values varies based on the services and the packaging types. Refer <a href='https://www.fedex.com/en-us/service-guide.html' target='_blank'>FedEx Service Guide</a> for service details related to DIM Weighting for FedEx Express and oversize conditions for FedEx Express and FedEx Ground.
     *
     *
     * Example:
     * @param OpenShipDimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->values['dimensions'] = $dimensions;
        return $this;
    }

    /**
     * Get dimensions
     *
     * @return OpenShipDimensions
     */
    public function getDimensions()
    {
        return $this->values['dimensions'];
    }

    /**
     * Indicate the grouped package count. These are number of identical package(s) each with one or more commodities. <br> Example: 2
     *
     *
     * Example: 2
     * @param int $groupPackageCount
     * @return $this
     */
    public function setGroupPackageCount($groupPackageCount)
    {
        $this->values['groupPackageCount'] = $groupPackageCount;
        return $this;
    }

    /**
     * Get groupPackageCount
     *
     * @return int
     */
    public function getGroupPackageCount()
    {
        return $this->values['groupPackageCount'];
    }

    /**
     * Describe the content of the package for customs clearance purposes. This applies to intra-UAE, intra-Columbia and intra-Brazil shipments.
     *
     *
     * Example: description
     * @param string $itemDescriptionForClearance
     * @return $this
     */
    public function setItemDescriptionForClearance($itemDescriptionForClearance)
    {
        $this->values['itemDescriptionForClearance'] = $itemDescriptionForClearance;
        return $this;
    }

    /**
     * Get itemDescriptionForClearance
     *
     * @return string
     */
    public function getItemDescriptionForClearance()
    {
        return $this->values['itemDescriptionForClearance'];
    }

    /**
     * Use this object to specify package content details.
     *
     *
     * Example:
     * @param OpenShipContentRecord[] $contentRecord
     * @return $this
     */
    public function setContentRecord(array $contentRecord)
    {
        $this->values['contentRecord'] = $contentRecord;
        return $this;
    }

    /**
     * Get contentRecord
     *
     * @return OpenShipContentRecord[]
     */
    public function getContentRecord()
    {
        return $this->values['contentRecord'];
    }

    /**
     * This the item description for the package.<br>Note: Item description is required for Email Label return shipments and ground Create tag.<br>Example: Item description<br> Maximum limit is 50 characters
     *
     *
     * Example: item description for the package
     * @param string $itemDescription
     * @return $this
     */
    public function setItemDescription($itemDescription)
    {
        $this->values['itemDescription'] = $itemDescription;
        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->values['itemDescription'];
    }

    /**
     * Set variableHandlingChargeDetail
     *
     *
     * Example:
     * @param OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail
     * @return $this
     */
    public function setVariableHandlingChargeDetail(OpenShipVariableHandlingChargeDetail $variableHandlingChargeDetail)
    {
        $this->values['variableHandlingChargeDetail'] = $variableHandlingChargeDetail;
        return $this;
    }

    /**
     * Get variableHandlingChargeDetail
     *
     * @return OpenShipVariableHandlingChargeDetail
     */
    public function getVariableHandlingChargeDetail()
    {
        return $this->values['variableHandlingChargeDetail'];
    }

    /**
     * Set packageSpecialServices
     *
     *
     * Example:
     * @param OpenShipPackageSpecialServicesRequested $packageSpecialServices
     * @return $this
     */
    public function setPackageSpecialServices(OpenShipPackageSpecialServicesRequested $packageSpecialServices)
    {
        $this->values['packageSpecialServices'] = $packageSpecialServices;
        return $this;
    }

    /**
     * Get packageSpecialServices
     *
     * @return OpenShipPackageSpecialServicesRequested
     */
    public function getPackageSpecialServices()
    {
        return $this->values['packageSpecialServices'];
    }
}
