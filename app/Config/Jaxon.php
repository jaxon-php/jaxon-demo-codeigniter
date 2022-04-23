<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use Jaxon\Demo\Service\Example;
use Jaxon\Demo\Service\ExampleInterface;

class Jaxon extends BaseConfig
{
    public $app = [
        'directories' => [
            APPPATH . '../jaxon/ajax' => [
                'namespace' => '\\Jaxon\\Demo\\Ajax',
                // 'separator' => '', // '.' or '_'
                // 'protected.' => [],
            ],
        ],
        'container' => [
            'auto' => [
                Example::class,
            ],
            'alias' => [
                ExampleInterface::class => Example::class
            ],
        ],
    ];

    public $lib = [
        'core' => [
            'language' => 'en',
            'encoding' => 'UTF-8',
            'request' => [
                'uri' => 'jaxon',
            ],
            'prefix' => [
                'class' => '',
            ],
            'debug' => [
                'on' => false,
                'verbose' => false,
            ],
            'error' => [
                'handle' => false,
            ],
        ],
        'js' => [
            'lib' => [
                // 'uri' => '',
            ],
            'app' => [
                // 'uri' => '',
                // 'dir' => '',
                'export' => false,
                'minify' => false,
                'options' => '',
            ],
        ],
        'dialogs' => [
            'libraries' => ['pgwjs'],
            'default' => [
                'modal' => 'bootstrap',
                'message' => 'toastr',
                'question' => 'bootstrap',
            ],
            'toastr' => [
                'options' => [
                    'closeButton' => true,
                    'positionClass' => 'toast-top-center'
                ],
            ],
            'assets' => [
                'include' => [
                    'all' => true,
                ],
            ],
        ],
    ];
}
