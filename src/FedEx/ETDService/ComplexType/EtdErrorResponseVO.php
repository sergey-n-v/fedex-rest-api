<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EtdErrorResponseVO
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError[] $errors

 */
class EtdErrorResponseVO extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO';

    /**
     * Set errors
     *
     * 
     * Example: 
     * @param EtdCXSError[] $errors
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
     * @return EtdCXSError[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
