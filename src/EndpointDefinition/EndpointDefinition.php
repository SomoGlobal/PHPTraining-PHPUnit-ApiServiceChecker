<?php

namespace Training\PHPUnit\ApiServiceChecker\EndpointDefinition;

/**
 * Class EndpointDefinition
 *
 * Defines an endpoint
 *
 * @package Training\PHPUnit\ApiServiceChecker\EndpointDefinition
 */
class EndpointDefinition
{
    /**
     * @var string
     */
    private $endPointUrl;

    /**
     * @var array
     */
    private $structure = [
        'success' => ['type' => 'boolean', 'required' => true],
        'dealers' => ['type' => 'array','required' => true,
            'structure' => [
                'name' => ['type' => 'string', 'required' => true],
                'distance' => ['type' => 'integer', 'required' => true],
                'dealerCode' => ['type' => 'string', 'required' => true],
                'osbAvailable' => ['type' => 'boolean', 'required' => true]
            ]
        ],
        'placeOptions' => ['type' => 'array', 'required' => true,
            'structure' => []
        ]
    ];

    /**
     * EndpointDefinition constructor.
     *
     * @param string $endpointUrl
     * @param array  $structure
     */
    public function __construct($endpointUrl, array $structure = null)
    {
        $this->endPointUrl = $endpointUrl;
        if (isset($structure) && !empty($structure)) {
            $this->structure = $structure;
        }
    }

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
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param array $structure
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
    }
}