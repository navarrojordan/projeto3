<?php

namespace Usuario;


use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'usuario ' => [
                'type' => literal::class,
                'options' => [
                    'route' => '/usuario',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/login',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'login',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ]
    ],
    'view_manager'=> [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];