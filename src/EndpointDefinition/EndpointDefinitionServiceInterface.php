<?php

namespace Training\PHPUnit\ApiServiceChecker\EndpointDefinition;

interface EndpointDefinitionServiceInterface
{
    /**
     * @return EndpointDefinition[]
     */
    public function getEndpointDefinitions();
}