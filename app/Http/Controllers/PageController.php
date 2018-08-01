<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setLanguage($lang)
    {
        $languages = ['en', 'my'];
        if (in_array($lang, $languages)) {
            \App::setLocale($lang);
            \Session::set(static::$langKey, $lang);
            \Session::save();
        }

        return redirect()->back();
    }
}
