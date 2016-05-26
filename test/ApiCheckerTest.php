<?php
use Training\PHPUnit\ApiServiceChecker\Checker\ApiChecker;
use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinitionServiceInterface;
use Training\PHPUnit\ApiServiceChecker\EndpointChecker;
use Training\PHPUnit\ApiServiceChecker\Alert\AlertServiceInterface;
use Training\PHPUnit\ApiServiceChecker\Alert\Alert;
class ApiCheckerTest extends \PHPUnit_Framework_TestCase {

    function setUp(){
        $endpointCheckerService = $this->getMockBuilder(EndpointCheckerService::class)->getMock();
        $endpointDefinitionService = $this->getMockBuilder(EndpointDefinitionServiceInterface::class)->getMock();
        $alertService = $this->getMockBuilder(AlertServiceInterface::class)->getMock();

        $this->apiChecker = new ApiChecker($endpointDefinitionService,$endpointCheckerService,$alertService);
    }

    public function testTest(){}
}