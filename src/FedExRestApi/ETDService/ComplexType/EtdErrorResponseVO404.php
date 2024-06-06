<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * EtdErrorResponseVO404
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError404[] $errors

 */
class EtdErrorResponseVO404 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO404';

    /**
     * Set errors
     *
     *
     * Example:
     * @param EtdCXSError404[] $errors
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
     * @return EtdCXSError404[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
