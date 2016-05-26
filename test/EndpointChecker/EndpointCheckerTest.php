<?php

namespace Training\PHPUnit\ApiServiceChecker\EndpointChecker\EndpointChecker;


use Training\PHPUnit\ApiServiceChecker\Comms\ApiRequesterInterface;
use Training\PHPUnit\ApiServiceChecker\Comms\ApiResponse;
use Training\PHPUnit\ApiServiceChecker\EndpointChecker\EndpointChecker;
use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;
use Training\PHPUnit\ApiServiceChecker\StructureChecker\StructureCheckerInterface;

class EndPointCheckerTest extends \PHPUnit_Framework_TestCase {

    private $mockApiRequester;
    private $mockStructureChecker;
    const ENDPOINT_URL = "http://random.com";
    const RESPONSE_DATA = "Error message";

    /**
     * @var EndpointChecker
     */
    private $endpointChecker;

    public function setUp() {
        $this->mockApiRequester = $this->getMockBuilder(
            ApiRequesterInterface::class
        )->getMock();

        $this->mockStructureChecker = $this->getMockBuilder(
            StructureCheckerInterface::class
        )->getMock();

        $this->endpointChecker = new EndpointChecker($this->mockApiRequester, $this->mockStructureChecker);

    }

    private function setMockApiRequestReturn(ApiResponse $apiResponse, $endpointUrl)
    {
        $this->mockApiRequester
//            ->expects($this->once())
            ->method("getResponse")
            ->with($endpointUrl)
            ->willReturn($apiResponse);
    }

    public function testApiRequestNon200()
    {

        $this->setMockApiRequestReturn(new ApiResponse(500, self::RESPONSE_DATA), self::ENDPOINT_URL);

        $endpointDefinition = new EndpointDefinition(self::ENDPOINT_URL, []);
        $alert = $this->endpointChecker->checkEndPoint($endpointDefinition);

        
        $this->assertEquals(500, $alert->getHttpCode());
        $this->assertEquals(self::RESPONSE_DATA, $alert->getData());
        $this->assertEquals(self::ENDPOINT_URL, $alert->getEndpointUrl());
    }

    public function testNoApiProblems()
    {
        $endpointDefinition = new EndpointDefinition(self::ENDPOINT_URL, []);
        $alert = $this->endpointChecker->checkEndPoint($endpointDefinition);

        $this->assertNull($alert);

    }
}