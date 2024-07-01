<?php 
namespace Bdacademy\LaravelMenu\Facades;
use Illuminate\Support\Facades\Facade;

class LaravelMenu extends Facade {
    /**
     * @see \Bdacademy\LaravelMenu\WMenu
     * 
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-menu';
    }
}