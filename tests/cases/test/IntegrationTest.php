<?php
/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2010, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */

namespace lithium\tests\cases\test;

use lithium\tests\mocks\test\MockIntegrationTest;

class IntegrationTest extends \lithium\test\Unit {

	public function testIntegrationHaltsOnFail() {
		$test = new MockIntegrationTest();

		$expected = 2;
		$report = $test->run();
		$result = count($report);

		$this->assertEqual($expected, $result);
	}
}

?>