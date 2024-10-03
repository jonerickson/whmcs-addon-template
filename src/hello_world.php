<?php

use DeschutesDesignGroupLLC\App\Http\Controllers\AdminController;
use DeschutesDesignGroupLLC\App\Http\Controllers\ClientController;
use WHMCS\User\Client;

/**
 * Do not all the file to be accessed directly
 */
if (! defined('WHMCS')) {
    exit('This file cannot be accessed directly');
}

require_once __DIR__.'/vendor/autoload.php';

/**
 * @return array
 */
function hello_world_config()
{
    return [
        'name' => 'WHMCS Addon Template',
        'description' => 'A template for creating a new WHMCS addon.',
        'version' => '1.0.0',
        'author' => 'Deschutes Design Group LLC',
        'language' => 'english',
    ];
}

/**
 * Ran when a user activates the addon.
 *
 * @return string[]
 */
function hello_world_activate()
{
    // Perform database migrations
}

/**
 * Ran when a user deactivates the addon.
 *
 * @return string[]
 */
function hello_world_deactivate()
{
    // Rollback database migration
}

/**
 * Ran when a user upgrades the addon to a newer version.
 *
 * @return void
 */
function hello_world_upgrade($vars)
{
    // Perform upgrade routine
}

/**
 * Admin area output.
 *
 * @return string
 */
function hello_world_output($vars)
{
    echo (new AdminController)->dispatch($vars);
}

/**
 * Client area output.
 *
 * @return array
 */
function hello_world_clientarea($vars)
{
    $controller = match (true) {
        default => new ClientController
    };

    return $controller->dispatch($vars);
}
