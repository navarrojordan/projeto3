<?php

namespace Grupo;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'principal' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/conteudo-principal',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'principal',
                    ],
                ],
            ],
        ],
        'post' => [
            'type' => Literal::class,
            'options' => [
                'route'    => '/conteudo-post',
                'defaults' => [
                    'controller' => Controller\IndexController::class,
                    'action'     => 'post',
                ],
            ],
        ],
        
        'comentario' => [
            'type' => Literal::class,
            'options' => [
                'route'    => '/conteudo-comentario',
                'defaults' => [
                    'controller' => Controller\IndexController::class,
                    'action'     => 'comentario',
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [       
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
