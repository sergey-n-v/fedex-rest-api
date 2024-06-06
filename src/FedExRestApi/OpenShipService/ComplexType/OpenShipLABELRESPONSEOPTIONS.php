<?php
namespace FedExRestApi\OpenShipService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * Specify whether the encoded bytecode or the label URL to be returned in the response.<p>Valid values:<ul><li>LABEL &ndash; Indicates request is for encoded bytecode.</li><li>URL_ONLY &ndash; Indicates label URL request.</li></ul>Note: For asynchronous shipment (More than 40 packages) request only the value LABEL is suported.</p><br><br><i>Note: With URL_ONLY option, the URL once created will be active for 12 hours.</i>
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *

 */
class OpenShipLABELRESPONSEOPTIONS extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'OpenShipLABELRESPONSEOPTIONS';


}
