<?php

namespace Training\PHPUnit\ApiServiceChecker\StructureChecker;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;

interface StructureCheckerInterface
{
    /**
     * Compare the structure of returned data with the expected structure for the defined API endpoint
     *
     * @param EndpointDefinition $endpointDefinition
     * @param array              $actualData
     *
     * @return string[]
     */
    public function checkStructure(EndpointDefinition $endpointDefinition, array $actualData);
}