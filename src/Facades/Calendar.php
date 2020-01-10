<?php namespace ConfrariaWeb\Fullcalendar\Facades;

use Illuminate\Support\Facades\Facade;

class Calendar extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'fullcalendar';
    }
}
