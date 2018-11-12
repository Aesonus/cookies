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
class RequestCookiesBuilderTest extends \Aesonus\TestLib\BaseTestCase
{

    protected $request;
    protected $expected_cookie;
    protected $test_obj;

    protected function setUp()
    {
        $this->request = new \GuzzleHttp\Psr7\Request('get', '/');
        $this->expected_cookie = \Dflydev\FigCookies\Cookie::create('test_name', 'test_value');
        $this->request = \Dflydev\FigCookies\FigRequestCookies::set($this->request,
                $this->expected_cookie);
        $this->test_obj = new \Aesonus\Cookies\RequestCookiesBuilder();
        parent::setUp();
    }

    /**
     * @test
     */
    public function getFromRequestReturnsCookieFromResponse()
    {
        $actual = $this->test_obj->getFromRequest($this->request);
        
        $this->assertCount(1, $actual->getAll());
        $this->assertEquals($this->expected_cookie, $actual->getAll()[0]);
    }
}
