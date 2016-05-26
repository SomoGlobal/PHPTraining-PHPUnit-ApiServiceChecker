<?php
/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 16:42
 */

namespace Training\PHPUnit\ApiServiceChecker\EndpointChecker;


use Training\PHPUnit\ApiServiceChecker\Alert\Alert;
use Training\PHPUnit\ApiServiceChecker\Comms\ApiRequesterInterface;
use Training\PHPUnit\ApiServiceChecker\EndpointDefinition\EndpointDefinition;
use Training\PHPUnit\ApiServiceChecker\StructureChecker\StructureCheckerInterface;

class EndpointChecker implements EndpointCheckerInterface
{
    /**
     * @var ApiRequesterInterface
     */
    private $apiRequester;

    /**
     * @var StructureCheckerInterface
     */
    private $structureChecker;

    /**
     * EndpointChecker constructor.
     * @param ApiRequesterInterface $apiRequester
     * @param StructureCheckerInterface $structureChecker
     */
    public function __construct(ApiRequesterInterface $apiRequester, StructureCheckerInterface $structureChecker)
    {
        $this->apiRequester = $apiRequester;
        $this->structureChecker = $structureChecker;
    }


    /**
     * @param $endpointDefinition
     * @return Alert|null
     */
    public function checkEndPoint(EndpointDefinition $endpointDefinition)
    {
        // TODO: Implement checkEndPoint() method.

        return new Alert(500, "Error message", "http://random.com", "", "");
    }
}