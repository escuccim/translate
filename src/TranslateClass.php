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

    public static function dropDown(){
        $langs = config('translate.languages');

        $html = '<ul class="dropdown-menu">';

        foreach($langs as $lang => $display){
            $html .= '<li><a href="/setlang/' . $lang . '">' . $display . '</a>';
        }
        $html .= '</ul>';

        return $html;
    }
}
