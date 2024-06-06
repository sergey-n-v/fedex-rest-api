<?php
namespace FedExRestApi\ETDService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * EtdErrorResponseVO403_1
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property EtdCXSError403_1[] $errors

 */
class EtdErrorResponseVO403_1 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'EtdErrorResponseVO403_1';

    /**
     * Set errors
     *
     *
     * Example:
     * @param EtdCXSError403_1[] $errors
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
     * @return EtdCXSError403_1[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
