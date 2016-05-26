<?php

namespace Training\PHPUnit\ApiServiceChecker\Alert;

/**
 * Holds information about an alert.
 *
 * Each alert has:
 *
 * - httpCode
 * - data
 * - endpointUrl
 * - problem
 * - timestamp
 */

class Alert {

	/**
     * @var int
     */
    private $httpCode;

    /**
     * @var String
     */
    private $data;

    /**
     * @var String
     */
    private $endpointUrl;

    /**
     * @var String
     */
    private $problem;

    /**
     * @var String
     */
    private $timestamp;

    /**
     * Alert constructor
     * 
     * @param int $httpCode
     * @param string $data
     * @param string $endpointUrl
     * @param string $problem
     * @param string $timestamp
     */
    public function __construct($httpCode, $data, $endpointUrl, $problem, $timestamp)
    {
        $this->httpCode = $httpCode;
        $this->data = $data;
        $this->endpointUrl = $endpointUrl;
        $this->problem = $problem;
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @return String
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return String
     */
    public function getEndpointUrl()
    {
        return $this->endpointUrl;
    }

    /**
     * @return String
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * @return String
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}