<?php
namespace Training\PHPUnit\Checker;

use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinitionServiceInterface;

class ApiChecker{

    /**
     * ApiChecker constructor.
     */
    public function __construct(
        EndpointDefinitionService $eds,
        ApiRequester $apiReq,
        StructureCheckerInterface $sci,
        AlertService $alertService
    ){
        $this->endpointDefinitionService = EndpointDefinitionService;
    }

    function checkApis()
    {

    }
}