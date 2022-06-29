<?php

namespace FaSe22\P\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FaSe22\P\P
 */
class P extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'p';
    }
}
