<?php
namespace FedExRestApi\TrackService\ComplexType;

use FedExRestApi\AbstractComplexType;

/**
 * TrackErrorResponseVO503
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property string $transactionId
 * @property TrackCXSError503[] $errors

 */
class TrackErrorResponseVO503 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackErrorResponseVO503';

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
     * @param TrackCXSError503[] $errors
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
     * @return TrackCXSError503[]
     */
    public function getErrors()
    {
        return $this->values['errors'];
    }
}
