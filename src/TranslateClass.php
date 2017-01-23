<?php

namespace Escuccim\Translate;

class TranslateClass
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    public static function languages(){
        return config('translate.languages');
    }

    
}
