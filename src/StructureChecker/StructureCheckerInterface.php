<?php

namespace Training\PHPUnit\ApiServiceChecker\StructureChecker;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;
use Training\PHPUnit\Comms\ApiResponse;

interface StructureCheckerInterface
{
    /**
     * @param EndpointDefinition $endpointDefinition
     * @param ApiResponse $apiResponse
     * @return array
     */
    public function checkStructure(EndpointDefinition $endpointDefinition, ApiResponse $apiResponse);
}