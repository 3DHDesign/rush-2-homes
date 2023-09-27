<?php

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "",
            'titleBefore'  => 'Your Premier Real Estate Partner in Sri Lanka',
            'description'  => 'Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.',
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'bing'      => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'alexa'     => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'pinterest' => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'yandex'    => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'norton'    => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => "Rush 2 Homes",
            'description' => 'Your Premier Real Estate Partner in Sri Lanka',
            'url'         => url()->full(),
            'type'        => 'website',
            'site_name'   => "Rush 2 Homes",
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Rush 2 Homes - Your Premier Real Estate Partner in Sri Lanka',
            'description' =>  'Discover top-quality real estate solutions in Sri Lanka, Dubai, and beyond with Rush2Homes, your exclusive sales and marketing partner of Rush Lanka Group. Trust our expertise, integrity, and extensive property portfolio to find your dream home, investment, or development project.',
            'url'         => url()->full(), // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'website',
            'images'      => [],
        ],
    ],
];
