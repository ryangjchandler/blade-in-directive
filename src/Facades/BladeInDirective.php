<?php

namespace RyanChandler\BladeInDirective\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RyanChandler\BladeInDirective\BladeInDirective
 */
class BladeInDirective extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blade-in-directive';
    }
}
