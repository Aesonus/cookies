<?php
/*
 * This file is part of the aesonus/cookies project.
 *
 * (c) Cory Laughlin <corylcomposinger@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aesonus\Cookies;

use Dflydev\FigCookies\Cookies;
use Psr\Http\Message\RequestInterface;

/**
 * Depends on Cookies class to function.
 */
class RequestCookiesBuilder implements RequestCookiesBuilderInterface
{
    public function getFromRequest(RequestInterface $request): Cookies
    {
        return Cookies::fromRequest($request);
    }
}
