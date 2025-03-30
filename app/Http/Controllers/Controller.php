<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function __construct()
    {
        $locale = session()->get('locale') ?? "en";
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
}
