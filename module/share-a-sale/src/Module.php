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
            'shareasale traffic [--limit=] [--verbose|-v]' => 'fetch usa today booklists',
            'shareasale get-products [--limit=] [--verbose|-v]' => 'fetch usa today dates',

            // Describe expected parameters
            array(
                '--limit',
                '(optional) limit',
                '--sleep',
                '(optional) seconds to sleep',
                '--verbose|-v',
                '(optional) turn on verbose mode'
            ),
        );
    }
}