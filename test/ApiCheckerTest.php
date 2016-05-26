<?php
use Training\PHPUnit\ApiServiceChecker\Checker\ApiChecker;
use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinitionServiceInterface;
use Training\PHPUnit\ApiServiceChecker\EndpointChecker;
use Training\PHPUnit\ApiServiceChecker\Alert\AlertServiceInterface;
use Training\PHPUnit\ApiServiceChecker\Alert\Alert;
class ApiCheckerTest extends \PHPUnit_Framework_TestCase {

    function setUp(){
        $endpointCheckerService = new $this->getMockBuilder(EndpointCheckerService::class)->getMock();
        $endpointDefinitionService = new $this->getMock(EndpointDefinitionServiceInterface::class)->getMock();
        $alertService = new $this->getMockBuilder(AlertServiceInterface::class)->getMock();

        $this->apiChecker = new ApiChecker($endpointDefinitionService,$endpointCheckerService,$alertService);
    }
}