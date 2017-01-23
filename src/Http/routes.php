<?php
Route::group(['middleware' => ['web']], function() {
    Route::get('/setlang/{lang}', '\Escuccim\Translate\Http\Controllers\LanguageController@setLanguage');
});