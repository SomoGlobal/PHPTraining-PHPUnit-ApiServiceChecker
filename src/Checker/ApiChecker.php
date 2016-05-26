<?php
namespace Training\PHPUnit\ApiServiceChecker\Checker;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinitionServiceInterface;
use Training\PHPUnit\ApiServiceChecker\EndpointChecker;
use Training\PHPUnit\ApiServiceChecker\AlertServiceInterface;

class ApiChecker{

    /**
     * ApiChecker constructor.
     */
    public function __construct(
        EndpointDefinitionService $endpointDefinitionService,
        EndpointChecker $endpointChecker,
        AlertService $alertService
    ){
        $this->endpointDefinitionService = $endpointDefinitionService;
        $this->endpointChecker = $endpointChecker;
        $this->AlertService = $alertService
    }
    
    function checkApis()
    {

    }
}