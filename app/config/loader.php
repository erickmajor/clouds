<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Clouds\Models' => APP_PATH . '/common/models/',
    'Clouds'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Clouds\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Clouds\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php',
    'Clouds\Modules\Admin\Module'    => APP_PATH . '/modules/admin/Module.php'
]);

$loader->register();
