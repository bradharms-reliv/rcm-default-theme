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
                        'screenShot' => '/modules/rcm-default-theme/images/admin/page.png',
                        'hidden' => true,
                    ],
                ],

                'defaults' => array(
                    'containers' => [
                        'header' => array(
                            'RcmHtmlArea' => array(
                                'renderOrder'    => 0,
                                'row'            => 0,
                                'instanceConfig' => array(
                                    'html' => '<p>This is a header</p>'
                                )
                            )
                        ),
                        'navigation' => array(
                            'RcmDynamicNavigation' => array(
                                'renderOrder'    => 0,
                                'row'            => 0,
                                'instanceConfig' => array(
                                    'links' => array(
                                        array(
                                            'href' => "/",
                                            'display' => 'Home',
                                        ),
                                    )
                                )
                            )
                        ),
                        'footer' => array(
                            'RcmHtmlArea' => array(
                                'renderOrder'    => 0,
                                'row'            => 0,
                                'instanceConfig' => array(
                                    'html' => '<p>This is a footer</p>'
                                )
                            )
                        ),
                    ],
                    'pages' => array(
                        'index' => array(
                            'pageLayout' => 'default',
                            'pageTitle' => 'Welcome',
                            'containers' => array(
                                'body' => array(
                                    'RcmHtmlArea' => array(
                                        'renderOrder'    => 0,
                                        'row'            => 0,
                                        'instanceConfig' => array(
                                            'html' => '<p>This is a the body</p>'
                                        )
                                    )
                                )
                            )
                        ),
                        'login' => array(
                            'pageLayout' => 'default',
                            'pageTitle' => 'Welcome',
                            'containers' => array(
                                'body' => array(
                                    'RcmLogin' => array(
                                        'renderOrder'    => 0,
                                        'row'            => 0,
                                        'instanceConfig' => array()
                                    )
                                )
                            )
                        ),
                        'reset-password' => array(
                            'pageLayout' => 'default',
                            'pageTitle' => 'Welcome',
                            'containers' => array(
                                'body' => array(
                                    'RcmResetPassword' => array(
                                        'renderOrder'    => 0,
                                        'row'            => 0,
                                        'instanceConfig' => array()
                                    )
                                )
                            )
                        ),
                        'reset-password' => array(
                            'pageLayout' => 'default',
                            'pageTitle' => 'Welcome',
                            'containers' => array(
                                'body' => array(
                                    'RcmCreateNewPassword' => array(
                                        'renderOrder'    => 0,
                                        'row'            => 0,
                                        'instanceConfig' => array()
                                    )
                                )
                            )
                        )
                    )
                )
            ]
        ],
    ],

    'asset_manager' => [
        'resolver_configs' => [
            'aliases' => [
                'modules/rcm-default-theme/' => __DIR__ . '/../public/',
            ],
            'collections' => [
                'modules/rcm-default-theme/theme.css' => [
                    'modules/rcm-default-theme/css/style.css',
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
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],

];
