<?php

namespace Training\PHPUnit\ApiServiceChecker\Comms;

/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 15:32
 */
interface ApiRequesterInterface
{
    /**
     * Will make request to endpoint and return ApiResponse
     *
     * @param string $endpointUrl
     * @return ApiResponse
     */
    public function getResponse($endpointUrl);

}