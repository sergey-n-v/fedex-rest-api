<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This object allows the control of label content for customization.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $maskedData
 * @property OpenShipRegulatoryLabelContentDetail[] $regulatoryLabels
 * @property OpenShipAdditionalLabelsDetail[] $additionalLabels
 * @property OpenShipDocTabContent $docTabContent

 */
class OpenShipCustomerSpecifiedLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCustomerSpecifiedLabelDetail';

    /**
     * Specify which data/sections on the label to be masked.<br>Note: <ul><li>SECONDARY_BARCODE &ndash; This is used for Smartpost shipment labels.</li><li>SHIPPER_INFORMATION &ndash; This is used for Third Party Consignee, Intra-UK shipments.</li><li>TOTAL_WEIGHT &ndash; This replaces the Total weight with Actual Weight in Master label and AWB copies.</li></ul>
     *
     * simpleClass: OpenShipMaskedData
     * Example: 
     * @param string $maskedData
     * @return $this
     */
    public function setMaskedData(array $maskedData)
    {
        $this->values['maskedData'] = $maskedData;
        return $this;
    }

    /**
     * Get maskedData
     *
     * @return string
     */
    public function getMaskedData()
    {
        return $this->values['maskedData'];
    }

    /**
     * Specify how the regulatory details to be provided on the labels.
     *
     * 
     * Example: 
     * @param OpenShipRegulatoryLabelContentDetail[] $regulatoryLabels
     * @return $this
     */
    public function setRegulatoryLabels(array $regulatoryLabels)
    {
        $this->values['regulatoryLabels'] = $regulatoryLabels;
        return $this;
    }

    /**
     * Get regulatoryLabels
     *
     * @return OpenShipRegulatoryLabelContentDetail[]
     */
    public function getRegulatoryLabels()
    {
        return $this->values['regulatoryLabels'];
    }

    /**
     * Specify how the additional details to be provided on the labels.
     *
     * 
     * Example: 
     * @param OpenShipAdditionalLabelsDetail[] $additionalLabels
     * @return $this
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->values['additionalLabels'] = $additionalLabels;
        return $this;
    }

    /**
     * Get additionalLabels
     *
     * @return OpenShipAdditionalLabelsDetail[]
     */
    public function getAdditionalLabels()
    {
        return $this->values['additionalLabels'];
    }

    /**
     * Set docTabContent
     *
     * 
     * Example: 
     * @param OpenShipDocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(OpenShipDocTabContent $docTabContent)
    {
        $this->values['docTabContent'] = $docTabContent;
        return $this;
    }

    /**
     * Get docTabContent
     *
     * @return OpenShipDocTabContent
     */
    public function getDocTabContent()
    {
        return $this->values['docTabContent'];
    }
}
