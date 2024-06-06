<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EtdErrorResponseVO500
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError500[] $errors

 */
class EtdErrorResponseVO500 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO500';

    /**
     * Set errors
     *
     * 
     * Example: 
     * @param EtdCXSError500[] $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->values['errors'] = $errors;
        return $this;
    }

    /**
     * Get errors
     *
     * @return EtdCXSError500[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
