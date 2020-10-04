<?php

namespace Krishnahimself\DateConverter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Krishnahimself\DateConverter\DateConverter
 */
class DateConverterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-ad-to-bs-converter';
    }
}
