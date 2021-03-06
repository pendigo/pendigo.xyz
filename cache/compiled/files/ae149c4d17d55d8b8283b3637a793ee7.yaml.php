<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'G:/WorkingPJ/grav-pendigo/user/plugins/email/blueprints.yaml',
    'modified' => 1450768680,
    'data' => [
        'name' => 'Email',
        'version' => '2.1.0',
        'description' => 'Enables the emailing system for Grav',
        'icon' => 'envelope',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'keywords' => 'plugin, email, sender',
        'homepage' => 'https://github.com/getgrav/grav-plugin-email',
        'bugs' => 'https://github.com/getgrav/grav-plugin-email/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mailer.engine' => [
                    'type' => 'select',
                    'label' => 'Mail Engine',
                    'size' => 'medium',
                    'options' => [
                        'none' => 'Disabled',
                        'smtp' => 'SMTP',
                        'sendmail' => 'Sendmail',
                        'mail' => 'PHP Mail'
                    ]
                ],
                'content_type' => [
                    'type' => 'select',
                    'label' => 'Content type',
                    'size' => 'medium',
                    'default' => 'text/html',
                    'options' => [
                        'text/plain' => 'Plain text',
                        'text/html' => 'HTML'
                    ]
                ],
                'from' => [
                    'type' => 'email',
                    'size' => 'medium',
                    'label' => 'Email from',
                    'placeholder' => 'Default email from address',
                    'validate' => [
                        'required' => true,
                        'type' => 'email'
                    ]
                ],
                'from_name' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email from name',
                    'placeholder' => 'Default email from name'
                ],
                'to' => [
                    'type' => 'email',
                    'size' => 'medium',
                    'label' => 'Email to',
                    'placeholder' => 'Default email to address',
                    'validate' => [
                        'required' => true,
                        'type' => 'email'
                    ]
                ],
                'to_name' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Email to name',
                    'placeholder' => 'Default email to name'
                ],
                'mailer.smtp.server' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP server',
                    'placeholder' => 'e.g. smtp.google.com'
                ],
                'mailer.smtp.port' => [
                    'type' => 'text',
                    'size' => 'small',
                    'label' => 'SMTP port',
                    'placeholder' => 'Defaults to 25 (plaintext) / 587 (encrypted)',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1,
                        'max' => 65535
                    ]
                ],
                'mailer.smtp.encryption' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'label' => 'SMTP encryption',
                    'options' => [
                        'none' => 'None',
                        'ssl' => 'SSL',
                        'ttl' => 'TTL'
                    ]
                ],
                'mailer.smtp.user' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP login name'
                ],
                'mailer.smtp.password' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'SMTP password'
                ],
                'mailer.sendmail.bin' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Path to sendmail',
                    'placeholder' => '/usr/sbin/sendmail'
                ]
            ]
        ]
    ]
];
