<?php

namespace Training\PHPUnit\Comms;

/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 15:35
 */
class ApiResponse
{
    /**
     * @var int
     */
    private $httpCode;

    /**
     * @var string
     */
    private $data;

    /**
     * ApiResponse constructor.
     * @param $httpCode
     * @param $data
     */
    public function __construct($httpCode, $data)
    {
        $this->httpCode = $httpCode;
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function getHttpCode() {
        return $this->httpCode;
    }

    /**
     * @return string
     */
    public function getData() {
        return $this->data;
    }
}