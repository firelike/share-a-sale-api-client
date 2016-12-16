<?php
namespace ShareASale;

use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

class Module implements ConsoleUsageProviderInterface
{

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }


    public function getConsoleUsage(Console $console)
    {
        return array(
            // Describe available commands
            'shareasale activity [--verbose|-v]' => 'call activity service method',
            'shareasale activity-summary [--verbose|-v]' => 'call activitySummary method',
            'shareasale merchant-timespan [--verbose|-v]' => 'call merchantTimespan method',
            'shareasale daily-activity [--verbose|-v]' => 'call dailyActivity method',
            'shareasale monthly-summary [--verbose|-v]' => 'call monthlySummary method',
            'shareasale voidtrail [--verbose|-v]' => 'call voidtrail method',
            'shareasale traffic [--verbose|-v]' => 'call traffic method',
            'shareasale apitokencount [--verbose|-v]' => 'call apitokencount method',
            'shareasale get-products [--verbose|-v]' => 'call getProducts service method',
            'shareasale invalid-links [--verbose|-v]' => 'call invalidLinks method',
            'shareasale order-inquiry [--verbose|-v]' => 'call orderInquiry method',
            'shareasale merchant-data-feeds [--verbose|-v]' => 'call merchantDataFeeds method',
            'shareasale coupon-deals [--verbose|-v]' => 'call couponDeals method',
            'shareasale merchant-status [--verbose|-v]' => 'call merchantStatus method',
            'shareasale merchant-creative [--verbose|-v]' => 'call merchantCreative method',
            'shareasale merchant-gift-card [--verbose|-v]' => 'call merchantGiftCard method',
            'shareasale edittrail [--verbose|-v]' => 'call edittrail method',
            'shareasale payment-summary [--verbose|-v]' => 'call paymentSummary method',
            'shareasale merchant-search [--verbose|-v]' => 'call merchantSearch method',
            'shareasale merchant-search-product [--verbose|-v]' => 'call  merchantSearchProduct method',
            'shareasale ledger [--verbose|-v]' => 'call ledger method',
            'shareasale balance [--verbose|-v]' => 'call balance method',

            // Describe expected parameters
            array(
                '--verbose|-v',
                '(optional) turn on verbose mode'
            ),
        );
    }
}