<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=soap',
            'username' => 'soap_user',
            'password' => '4Q6g6O0o',
            'charset' => 'utf8',
        ],
        'dbNovaposhta' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=crm_mald_novaposhta',
            'username' => 'crm_mald_np_user',
            'password' => '3D6q1D6y',
            'charset' => 'utf8',
        ],
    ],
];