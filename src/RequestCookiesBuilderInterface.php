<?php

/*
 * This file is part of the slenderman/authentication project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\Cookies;

use Psr\Http\Message\RequestInterface;
use Dflydev\FigCookies\Cookies;

interface RequestCookiesBuilderInterface
{
    public function getFromRequest(RequestInterface $request): Cookies;
}
