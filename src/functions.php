<?php

if ( ! function_exists('setLanguage')) {
    function setLanguage()
    {
        App::setLocale(session('locale') ? session('locale') : config('app.locale'));
        if (App::getLocale() != config('app.locale')) {
            $dateFormat = config('translate.date_formats.' . App::getLocale());
            setlocale(LC_TIME, $dateFormat);
        }
    }
}