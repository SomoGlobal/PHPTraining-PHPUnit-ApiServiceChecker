<?php

use Training\PHPUnit\ApiServiceChecker\Alert\Alert;

class AlertTest extends \PHPUnit_Framework_TestCase {
	
	public function testAlertCreation() {
		$alert = null;
		$this->AssertNull($alert);

		$alert = new Alert(200, '[success:true]', 'test/endpoint/', 'Alert creation', time());
		$this->AssertNotNull($alert);
	}

	public function testAlertGetters() {
		$inputHttpCode = 200;
		$inputData = '[success:true]';
		$inputEndpoint = 'test/endpoint/';
		$inputProblem = 'Alert creation';
		$inputTime = time();
		$alert = new Alert($inputHttpCode, $inputData, $inputEndpoint, $inputProblem, $inputTime);

		$this->assertEquals($alert->gethttpCode(),$inputHttpCode);
		$this->assertEquals($alert->getData(),$inputData);
		$this->assertEquals($alert->getProblem(),$inputProblem);
		$this->assertEquals($alert->getTimestamp(),$inputTime);

	}


}