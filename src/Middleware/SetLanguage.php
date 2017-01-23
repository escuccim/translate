<?php

namespace App\Http\Middleware;

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
	    $subdomain = app_subdomain();
        if($subdomain) {
            $lang = config('skooch.subdomains')[$subdomain];
            session(['locale' => $lang]);
            App()->setLocale($lang);
	    }
	    return $next($request);
	}
}
