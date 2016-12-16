<?php
return array(
    'controllers' => array(
        'factories' => [
            'ShareASale\Controller\Console' => ShareASale\Controller\Factory\ConsoleControllerFactory::class
        ]
    ),
    'service_manager' => array(
        'factories' => array(
            ShareASale\Service\ShareASaleService::class => ShareASale\Service\Factory\ShareASaleServiceFactory::class,
            ShareASale\Validator\BasicServiceMethodParametersValidator::class => ShareASale\Validator\Factory\BasicServiceMethodParametersValidatorFactory::class,
            ShareASale\Validator\DefaultParametersNotEmptyValidator::class => ShareASale\Validator\Factory\DefaultParametersNotEmptyValidatorFactory::class,
            ShareASale\Validator\FormatParameterValidator::class => ShareASale\Validator\Factory\FormatParameterValidatorFactory::class,
            ShareASale\Validator\ProperServiceMethodParametersValidator::class => ShareASale\Validator\Factory\ProperServiceMethodParametersValidatorFactory::class,
            ShareASale\Validator\SortDirectionParameterValidator::class => ShareASale\Validator\Factory\SortDirectionParameterValidatorFactory::class,
            ShareASale\Validator\XmlFormatParameterValidator::class => ShareASale\Validator\Factory\XmlFormatParameterValidatorFactory::class,
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'shareasale-activity' => array(
                    'options' => array(
                        'route' => 'shareasale activity [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'activity'
                        )
                    )
                ),
                'shareasale-activity-summary' => array(
                    'options' => array(
                        'route' => 'shareasale activity-summary [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'activity-summary'
                        )
                    )
                ),
                'shareasale-timespan' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-timespan [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-timespan'
                        )
                    )
                ),
                'shareasale-daily-activity' => array(
                    'options' => array(
                        'route' => 'shareasale daily-activity [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'daily-activity'
                        )
                    )
                ),
                'shareasale-monthly-summary' => array(
                    'options' => array(
                        'route' => 'shareasale monthly-summary [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'monthly-summary'
                        )
                    )
                ),
                'shareasale-voidtrail' => array(
                    'options' => array(
                        'route' => 'shareasale voidtrail [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'voidtrail'
                        )
                    )
                ),
                'shareasale-traffic' => array(
                    'options' => array(
                        'route' => 'shareasale traffic [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'traffic'
                        )
                    )
                ),
                'shareasale-apitokencount' => array(
                    'options' => array(
                        'route' => 'shareasale apitokencount [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'apitokencount'
                        )
                    )
                ),
                'shareasale-get-products' => array(
                    'options' => array(
                        'route' => 'shareasale get-products [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'get-products'
                        )
                    )
                ),
                'shareasale-invalid-links' => array(
                    'options' => array(
                        'route' => 'shareasale invalid-links [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'invalid-links'
                        )
                    )
                ),
                'shareasale-order-inquiry' => array(
                    'options' => array(
                        'route' => 'shareasale order-inquiry [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'order-inquiry'
                        )
                    )
                ),
                'shareasale-merchant-data-feeds' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-data-feeds [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-data-feeds'
                        )
                    )
                ),
                'shareasale-coupon-deals' => array(
                    'options' => array(
                        'route' => 'shareasale coupon-deals [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'coupon-deals'
                        )
                    )
                ),
                'shareasale-merchant-status' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-status [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-status'
                        )
                    )
                ),
                'shareasale-merchant-creative' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-creative [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-creative'
                        )
                    )
                ),
                'shareasale-merchant-gift-card' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-gift-card [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-gift-card'
                        )
                    )
                ),
                'shareasale-edittrail' => array(
                    'options' => array(
                        'route' => 'shareasale edittrail [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'edittrail'
                        )
                    )
                ),
                'shareasale-payment-summary' => array(
                    'options' => array(
                        'route' => 'shareasale payment-summary [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'payment-summary'
                        )
                    )
                ),
                'shareasale-merchant-search' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-search [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-search'
                        )
                    )
                ),
                'shareasale-merchant-search-product' => array(
                    'options' => array(
                        'route' => 'shareasale merchant-search-product [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'merchant-search-product'
                        )
                    )
                ),
                'shareasale-ledger' => array(
                    'options' => array(
                        'route' => 'shareasale ledger [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'ledger'
                        )
                    )
                ),
                'shareasale-balance' => array(
                    'options' => array(
                        'route' => 'shareasale balance [--verbose|-v]',
                        'defaults' => array(
                            'controller' => 'ShareASale\Controller\Console',
                            'action' => 'balance'
                        )
                    )
                )
            )
        )
    )
);


