<?php

/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 16:16
 */
interface EndPointCheckerInterface
{
    /**
     * @param $endpointUrl
     * @return mixed
     */
    public function checkEndPoint($endpointUrl);
}