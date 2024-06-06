<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This object allows the control of label content for customization.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $maskedData
 * @property ShipRegulatoryLabelContentDetail[] $regulatoryLabels
 * @property ShipAdditionalLabelsDetail[] $additionalLabels
 * @property ShipDocTabContent $docTabContent

 */
class ShipCustomerSpecifiedLabelDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'ShipCustomerSpecifiedLabelDetail';

    /**
     * Set maskedData
     *
     * simpleClass: ShipMaskedData
     * Example: ["CUSTOMS_VALUE","TOTAL_WEIGHT"]
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
     * Set regulatoryLabels
     *
     * 
     * Example: 
     * @param ShipRegulatoryLabelContentDetail[] $regulatoryLabels
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
     * @return ShipRegulatoryLabelContentDetail[]
     */
    public function getRegulatoryLabels()
    {
        return $this->values['regulatoryLabels'];
    }

    /**
     * Set additionalLabels
     *
     * 
     * Example: 
     * @param ShipAdditionalLabelsDetail[] $additionalLabels
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
     * @return ShipAdditionalLabelsDetail[]
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
     * @param ShipDocTabContent $docTabContent
     * @return $this
     */
    public function setDocTabContent(ShipDocTabContent $docTabContent)
    {
        $this->values['docTabContent'] = $docTabContent;
        return $this;
    }

    /**
     * Get docTabContent
     *
     * @return ShipDocTabContent
     */
    public function getDocTabContent()
    {
        return $this->values['docTabContent'];
    }
}
