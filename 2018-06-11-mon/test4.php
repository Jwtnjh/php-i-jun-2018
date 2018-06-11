<?php
## SCOTT

// Lab 1: 0
// Lab 2: 4
// Lab 3: echo $mission['STS395'][2]['specialty'];
// Lab 4: 

$config = [
    'router' => [
        'routes' => [
            'market' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/market',
                    'defaults' => [
                        'controller' => 'IndexController',
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
];

echo $config['router']['routes']['market']['options']['defaults']['action'];
