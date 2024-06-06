<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackErrorResponseVO403
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property TrackCXSError403[] $errors

 */
class TrackErrorResponseVO403 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackErrorResponseVO403';

    /**
     * Set transactionId
     *
     * 
     * Example: 624deea6-b709-470c-8c39-4b5511281492
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->values['transactionId'] = $transactionId;
        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->values['transactionId'];
    }

    /**
     * Set errors
     *
     * 
     * Example: 
     * @param TrackCXSError403[] $errors
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
     * @return TrackCXSError403[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
