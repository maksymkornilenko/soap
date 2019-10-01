<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=soap_maldive2.0',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'dbNovaposhta' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=mcrm_novaposhta',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
