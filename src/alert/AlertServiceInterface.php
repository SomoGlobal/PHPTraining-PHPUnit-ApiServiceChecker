<?php

namespace Training\PHPUnit\ApiServiceChecker;

interface AlertServiceInterface
{
    public function raiseAlert(Alert $alert);
}