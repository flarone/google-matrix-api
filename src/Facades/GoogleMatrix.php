<?php

namespace Flarone\GoogleMatrix\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleMatrix extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-matrix';
    }
}
