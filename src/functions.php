<?php
if ( ! function_exists('app_subdomain')) {
    function app_subdomain()
    {
        if(isset($_SERVER['SERVER_NAME'])){
            $domain = $_SERVER['SERVER_NAME'];
        } else {
            $domain = str_replace('http://', '', env('APP_URL'));
        }

        $pieces = explode('.', $domain);
        if(count($pieces) > 2){
            return $pieces[0];
        } else {
            return null;
        }
    }
}