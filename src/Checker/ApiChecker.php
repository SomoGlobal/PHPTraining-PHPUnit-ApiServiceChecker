<?php
namespace Training\PHPUnit\ApiServiceChecker\Checker;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinitionServiceInterface;
use Training\PHPUnit\ApiServiceChecker\EndpointChecker\EndpointCheckerInterface;
use Training\PHPUnit\ApiServiceChecker\Alert\AlertServiceInterface;

class ApiChecker{

    /**
     * ApiChecker constructor.
     */
    public function __construct(
        EndpointDefinitionServiceInterface $endpointDefinitionService,
        EndpointCheckerInterface $endpointChecker,
        AlertServiceInterface $alertService
    ){
        $this->endpointDefinitionService = $endpointDefinitionService;
        $this->endpointChecker = $endpointChecker;
        $this->AlertService = $alertService;
    }
    
    function checkApis()
    {

    }
}