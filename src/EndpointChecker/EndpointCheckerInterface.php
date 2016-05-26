<?php

namespace Training\PHPUnit\ApiServiceChecker\EndpointChecker;

use Training\PHPUnit\ApiServiceChecker\Alert\Alert;
use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;


/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 16:16
 */
interface EndpointCheckerInterface
{
    /**
     * @param $endpointDefinition
     * @return Alert|null
     */
    public function checkEndpoint(EndpointDefinition $endpointDefinition);
}