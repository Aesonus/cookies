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

use Dflydev\FigCookies\SetCookie;

class SetCookieBuilder implements SetCookieBuilderInterface
{
    
    public function create(string $name, ?string $value = null): SetCookie
    {
        return SetCookie::create($name, $value);
    }
}
