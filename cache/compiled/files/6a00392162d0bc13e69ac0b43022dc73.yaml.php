<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'G:/WorkingPJ/grav-pendigo/user/config/system.yaml',
    'modified' => 1451138468,
    'data' => [
        'home' => [
            'alias' => '/archive'
        ],
        'pages' => [
            'theme' => 'pendigo-newgen',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => true
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
