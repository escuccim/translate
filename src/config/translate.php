<?php

return [
    'use_subdomain' => true,
    'languages'     => [
        'en' => 'en',
        'fr' => 'fr',
    ],
    'subdomains'    => [
        'fr'    => 'fr',
        'ch'    => 'fr',
        'www'   => 'en',
        'default'   => config('app.locale'),
    ],
    'date_formats'  => [
        'fr'  => 'fr_CH.UTF-8',
    ],
];