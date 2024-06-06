<?php


namespace FedEx\AuthorizationService\ComplexType;


use FedEx\AbstractComplexType;

/**
 * Class AuthorizationReply
 * @package FedEx\AuthorizationService\ComplexType
 *
 * @property array $errors
 */
class AuthorizationReply extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'AuthorizationReply';

    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors): AuthorizationReply
    {
        $this->values['errors'] = $errors;
        return $this;
    }
}
