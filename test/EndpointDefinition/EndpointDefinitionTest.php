<?php

namespace Training\PHPUnit\ApiServiceChecker\Test\EndpointDefinition;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;

class EndpointDefinitionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EndpointDefinition
     */
    private $endpointDefinition;

    public function setUp()
    {
        $this->endpointDefinition = new EndpointDefinition('endPointUrl');
    }

    public function testGetStructure()
    {
        $actualResult = $this->endpointDefinition->getStructure();
        $this->assertTrue(is_array($actualResult));
    }
}