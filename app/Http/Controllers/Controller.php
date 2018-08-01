<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected static $cookieLang = false;
    protected static $langKey = 'langKey';

    public function __construct()
    {
        $this->setLocale();
    }

    protected function setLocale()
    {
        // Check params
        if (Input::get('my') !== NULL || Input::get('en') !== NULL) {
            $locale = (Input::get('my') !== NULL) ? 'my' : 'en';
            static::saveLocale($locale);
        } elseif (static::locale()) {
            App::setLocale(static::locale());
        }


    }

    protected static function saveLocale($lang)
    {
        \App::setLocale($lang);
        if (static::$cookieLang)
            \Cookie::queue(static::$langKey, $lang);
        \Session::set(static::$langKey, $lang);
        \Session::save();
    }

    protected static function locale()
    {
        if (static::$cookieLang)
            $locale = \Cookie::get(static::$langKey);
        if (!isset($locale) || !$locale) $locale = \Session::get(static::$langKey);
        return $locale;
    }
}
