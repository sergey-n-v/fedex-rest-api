<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EtdErrorResponseVO401
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError401[] $errors

 */
class EtdErrorResponseVO401 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO401';

    /**
     * Set errors
     *
     * 
     * Example: 
     * @param EtdCXSError401[] $errors
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
     * @return EtdCXSError401[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
