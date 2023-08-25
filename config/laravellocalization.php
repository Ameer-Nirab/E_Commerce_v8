<?php

return [

    'supportedLocales' => [
        'en'=> ['name' => 'English','script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB' , 'flag' => 'uk.png'],
        'fr'=> ['name' => 'French','script' => 'Latn', 'native' => 'français', 'regional' => 'fr_FR' , 'flag' => 'fr.png'],
        'ar'=> ['name' => 'Arabic','script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE' , 'flag' => 'ps.png'],
    ],

    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => [],
    'localesMapping' => [],
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),
    'urlsIgnored' => ['/skipped'],
    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],
];
