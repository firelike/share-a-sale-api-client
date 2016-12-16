<?php
return array(
    'modules' => require __DIR__ . '/modules.config.php',
    'module_listener_options' => array(
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => array(
            realpath(__DIR__) . '/autoload/{{,*.}global,{,*.}local}.php',
        ),
        'config_cache_enabled' => false,
        'config_cache_key' => 'app_config',
        'module_map_cache_enabled' => false,
        'module_map_cache_key' => 'module_map',
        'cache_dir' => 'data/cache/'
    )
);
