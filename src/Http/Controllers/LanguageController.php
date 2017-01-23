<?php

namespace Escuccim\Translate\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
	public function setLanguage($lang, Request $request){
		$request->session()->put('locale', $lang);
		return back();
	}
}
