<?php
return array(
    'controllers' => array(
        'factories' => [
            'ShareASale\Controller\Console' => 'ShareASale\Controller\Factory\ConsoleControllerFactory',
        ]
    ),
    'service_manager' => array(
        'factories' => array(
            ShareASale\Service\ShareASale::class => ShareASale\Service\Factory\ShareASaleFactory::class
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'shareasale-activity' => array(
                    'options' => array(
                        'route' => 'shareasale activity [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'activity'
                        )
                    )
                ),
                'shareasale-activity-summary' => array(
                    'options' => array(
                        'route' => 'shareasale activity-summary [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'activity-summary'
                        )
                    )
                ),
                'shareasale-timespan' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-timespan [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-timespan'
                        )
                    )
                ),
                'shareasale-monthly-summary' => array(
                    'options' => array(
                        'route' => 'shareasale monthly-summary [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'monthly-summary'
                        )
                    )
                ),
                'shareasale-traffic' => array(
                    'options' => array(
                        'route' => 'shareasale traffic [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'traffic'
                        )
                    )
                ),
                'shareasale-get-products' => array(
                    'options' => array(
                        'route' => 'shareasale get-products [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'get-products'
                        )
                    )
                ),
                'shareasale-invalid-links' => array(
                    'options' => array(
                        'route' => 'shareasale invalid-links [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'invalid-links'
                        )
                    )
                ),
                'shareasale-merchant-data' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-data-feeds [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-data-feeds'
                        )
                    )
                ),
                'shareasale-coupon-deals' => array(
                    'options' => array(
                        'route' => 'shareasale coupon-deals [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'coupon-deals'
                        )
                    )
                ),
                'shareasale-merchant-status' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-status [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-status'
                        )
                    )
                ),
                'shareasale-merchant-creative' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-creative [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-creative'
                        )
                    )
                ),
                'shareasale-merchant-gift-card' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-gift-card [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-gift-card'
                        )
                    )
                ),
                'shareasale-payment-summary' => array(
                    'options' => array(
                        'route' => 'shareasale payment-summary [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'payment-summary'
                        )
                    )
                ),
                'shareasale-merchant-search' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-search [--limit=] [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-search'
                        )
                    )
                )
            )
        )
    )
);


