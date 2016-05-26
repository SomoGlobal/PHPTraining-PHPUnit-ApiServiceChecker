<?php

/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 26/05/2016
 * Time: 15:32
 */
interface ApiRequesterInterface
{
    /**
     * @param $endPointUrl
     */
    public function getResponse($endPointUrl);

}