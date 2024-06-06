<?php
namespace FedEx\ETDService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EtdErrorResponseVO403
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError403[] $errors

 */
class EtdErrorResponseVO403 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO403';

    /**
     * Set errors
     *
     * 
     * Example: 
     * @param EtdCXSError403[] $errors
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
     * @return EtdCXSError403[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
