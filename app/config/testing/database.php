<?php
return [
    'default'     => 'mysql',
    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => ":memory:",
            'prefix'   => '',
        ]
    ]
];