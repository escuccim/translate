<?php

namespace Escuccim\Translate\Http\Middleware;

use Closure;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	public function handle($request, Closure $next)
    {
        // if we have language specified by subdomain set the app to use that
        if (config('translate.use_subdomain')) {
            $subdomain = app_subdomain();
            if ($subdomain) {
                if(isset(config('translate.subdomains')[$subdomain])){
                    $lang = config('translate.subdomains')[$subdomain];
                } else {
                    $lang = config('translate.subdomains')['default'];
                }
                App()->setLocale($lang);
            }
        }
        // if we have a language in session override the subdomain and use that
        \App::setLocale(session('locale') ? session('locale') : config('app.locale'));

        // if we have date formats specified in the config, set those as well
        if(config('translate.date_formats')){
            $dateFormat = config('translate.date_formats.' . \App::getLocale());
            setlocale(LC_TIME, $dateFormat);
        }

        return $next($request);
	}
}
