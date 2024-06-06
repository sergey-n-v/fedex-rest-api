<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specify the details about how to retrieve the subsequent pages when there is more than one page in the TrackReply.
 *
 * @author      Asabix
 * @package     PHP FedEx REST API wrapper
 *
 *
 * @property int $resultsPerPage
 * @property string $pagingToken

 */
class TrackPagingDetails_2 extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'TrackPagingDetails_2';

    /**
     * Set resultsPerPage
     *
     * 
     * Example: 56
     * @param int $resultsPerPage
     * @return $this
     */
    public function setResultsPerPage($resultsPerPage)
    {
        $this->values['resultsPerPage'] = $resultsPerPage;
        return $this;
    }

    /**
     * Get resultsPerPage
     *
     * @return int
     */
    public function getResultsPerPage()
    {
        return $this->values['resultsPerPage'];
    }

    /**
     * Set pagingToken
     *
     * 
     * Example: 38903279038
     * @param string $pagingToken
     * @return $this
     */
    public function setPagingToken($pagingToken)
    {
        $this->values['pagingToken'] = $pagingToken;
        return $this;
    }

    /**
     * Get pagingToken
     *
     * @return string
     */
    public function getPagingToken()
    {
        return $this->values['pagingToken'];
    }
}
