<?php


namespace App\Facades\Json;

use App\Modules\Json\Json as JsonModule;
use Illuminate\Support\Facades\Facade;

/**
 * Class Json
 * @method static encode($obj)
 * @method static decode(string $str)
 * @package App\Facades\Json
 */
class Json extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return JsonModule::class;
    }
}