<?php
/*
 * This file is part of the aesonus/cookies package.
 * Copyright (c)2018 Cory Laughlin.
 * For full license terms, please see the LICENSE file that was distributed
 * with the source code.
 */

namespace Aesonus\Tests;

/**
 *
 * @author Aesonus <corylcomposinger at gmail.com>
 */
class SetCookieBuilderTest extends \Aesonus\TestLib\BaseTestCase
{
    protected $testObj;
    
    protected function setUp()
    {
        $this->testObj = new \Aesonus\Cookies\SetCookieBuilder();
        parent::setUp();
    }
    
    /**
     * @test
     */
    public function createReturnsCookieWithNameAndValue()
    {
        $expected_name = 'testName';
        $expected_value = 'testValue';
        
        $actual = $this->testObj->create($expected_name, $expected_value);
        
        $this->assertEquals($expected_name, $actual->getName());
        $this->assertEquals($expected_value, $actual->getValue());
    }
}
