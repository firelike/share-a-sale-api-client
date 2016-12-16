<?php
date_default_timezone_set("America/Los_Angeles");

defined('APPLICATION_ENV_PRODUCTION') || define('APPLICATION_ENV_PRODUCTION', 'production');
defined('APPLICATION_ENV_STAGING') || define('APPLICATION_ENV_STAGING', 'staging');
defined('APPLICATION_ENV_TESTING') || define('APPLICATION_ENV_TESTING', 'testing');
defined('APPLICATION_ENV_DEVELOPMENT') || define('APPLICATION_ENV_DEVELOPMENT', 'development');

defined('SYSTEM_TEMP_DIR') || define('SYSTEM_TEMP_DIR', sys_get_temp_dir());

// Define application environment
if (array_key_exists('APPLICATION_ENV', $_SERVER)) {
    defined('APPLICATION_ENV') || define('APPLICATION_ENV', $_SERVER['APPLICATION_ENV']);
} elseif (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN') {
    defined('APPLICATION_ENV') || define('APPLICATION_ENV', APPLICATION_ENV_PRODUCTION);
} else {
    defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ?: APPLICATION_ENV_DEVELOPMENT));
}

use Zend\Mvc\Application;

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));


// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';


if (!defined('APPLICATION_PATH')) {
    define('APPLICATION_PATH', realpath(__DIR__ . '/../'));
}
$appConfig = include APPLICATION_PATH . '/config/application.config.php';

// Run the application!
Zend\Mvc\Application::init($appConfig)->run();
