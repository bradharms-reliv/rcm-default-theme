<?php

return [
    'Rcm' => [
        'themes' => [
            'rcm-default-theme' => [
                'screenShot' => '/modules/rcm-default-theme/images/theme.png',
                'display' => 'RCM Theme',
                'layouts' => [
                    'default' => [
                        'display' => 'Interior Page',
                        'file' => 'page.phtml',
                        'screenShot' => '/modules/rcm-default-theme/images/admin/page.png',
                        'hidden' => true,
                    ],
                    'home-page' => [
                        'display' => 'Home Page',
                        'file' => 'home-page.phtml',
                        'screenShot' => '/rcm-default-theme/images/admin/home-page.png',
                    ],
                ],
                'pages' => [
                    'default' => [
                        'display' => 'Interior Page',
                        'file' => 'page.phtml',
                        'screenShot' => '/modules/reliv-default-theme/images/admin/page.png',
                        'hidden' => true,
                    ],
                ]
            ]
        ],
    ],
    'asset_manager' => [
        'resolver_configs' => [
            'aliases' => [
                'modules/reliv-default-theme/' => __DIR__ . '/../public/',
            ],
            'collections' => [
                'modules/rcm-default-theme/theme.css' => [
                    'modules/reliv-default-theme/css/style.css',
                ],
            ],
        ],
    ],

    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout'
            => __DIR__ . '/../view/layout/page.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

];
