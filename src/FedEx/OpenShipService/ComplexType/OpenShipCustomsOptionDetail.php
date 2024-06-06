<?php
namespace FedEx\OpenShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * These are customs Option Detail, type must be indicated for each occurrence.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $description
 * @property string $type

 */
class OpenShipCustomsOptionDetail extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipCustomsOptionDetail';

    /**
     * Specify additional description about customs options. This is a required field when the Type is OTHER.
     *
     * 
     * Example: Description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->values['description'] = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->values['description'];
    }

    /**
     * Specify the reason for a global return, as recognized by Customs. Valid values:<ul><li>COURTESY_RETURN_LABEL: For the outbound courtesy return label.</li><li>EXHIBITION_TRADE_SHOW: For exhibition or trade-show, outbound and inbound.</li><li>FAULTY_ITEM: For faulty item being returned, inbound only.</li><li>FOLLOWING_REPAIR: For repaired or processed item being sent, outbound only.</li><li>FOR_REPAIR: For repair or processing, outbound and inbound.</li><li>ITEM_FOR_LOAN: For loan item, outbound and inbound.</li><li>OTHER: Other reason, outbound and inbound. This type requires a description.</li><li>REJECTED: For rejected merchandise being returned, inbound.</li><li>REPLACEMENT: For replacement being sent, outbound only.</li><li>TRIAL: For use in a trial, outbound and inbound.</li></ul>
     *
     * simpleClass: OpenShipType
     * Example: COURTESY_RETURN_LABEL
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
