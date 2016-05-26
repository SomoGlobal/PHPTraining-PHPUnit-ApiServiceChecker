<?php

namespace Training\PHPUnit\ApiServiceChecker\Alert;

interface AlertServiceInterface
{
    public function raiseAlert(Alert $alert);
}