<?php

namespace Training\PHPUnit\ApiServiceChecker\EndpointDefinition;

class EndpointDefinition
{
    /**
     * @var string
     */
    private $endPointUrl;

    /**
     * @var array
     */
    private $structure;

    /**
     * @return string
     */
    public function getEndPointUrl()
    {
        return $this->endPointUrl;
    }

    /**
     * @param string $endPointUrl
     */
    public function setEndPointUrl($endPointUrl)
    {
        $this->endPointUrl = $endPointUrl;
    }

    /**
     * @return array
     */
    public function getDataStructure()
    {
        return $this->structure;
    }

    /**
     * @param array $structure
     */
    public function setDataStructure($structure)
    {
        $this->structure = $structure;
    }
}