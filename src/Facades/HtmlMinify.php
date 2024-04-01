<?php

namespace minimo\HtmlMinify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \minimo\HtmlMinify\HtmlMinify
 */
class HtmlMinify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \minimo\HtmlMinify\HtmlMinify::class;
    }
}
