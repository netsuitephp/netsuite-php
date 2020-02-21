<?php
/**
 * This file is part of the SevenShores/NetSuite library.
 *
 * @package    ryanwinchester/netsuite-php
 * @author     James Gilliland <neclimdul@gmail.com>
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 * created:    2020-02-19  11:02 AM
 */

namespace NetSuite\Provider;

use Illuminate\Support\ServiceProvider;
use NetSuite\NetSuiteService;

class NetSuiteServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // If this is laravel and not lumen, publish config.
        if (function_exists('config_path')) {
            $this->publishes(
                [
                    __DIR__ . '/netsuite_config.php' => config_path(
                        'netsuite.php'
                    ),
                ],
                'config'
            );
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            NetSuiteService::class,
            function ($app) {
                /** @var \Illuminate\Config\Repository $config_service */
                $config_service = $app->make('config');

                // Normally a provider would merge with default config file but as an
                // app this doesn't make sense so just load the config.
                $config = [
                    'endpoint' => $config_service['netsuite.endpoint'],
                    'host' => $config_service['netsuite.host'],
                    'account' => $config_service['netsuite.account'],
                    'app_id' => $config_service['netsuite.app_id'],
                    'logging' => $config_service['netsuite.logging'],
                    'log_path' => $config_service['netsuite.log_path'],
                ];
                // If email is set, use the email auth.
                if ($config_service['netsuite.email']) {
                    $config += [
                        'email' => $config_service['netsuite.email'],
                        'password' => $config_service['netsuite.password'],
                        'role' => $config_service['netsuite.role'],
                    ];
                } // Otherwise, setup token auth and hope it works.
                else {
                    $config += [
                        'consumerKey' => $config_service['netsuite.consumerKey'],
                        'consumerSecret' => $config_service['netsuite.consumerSecret'],
                        'token' => $config_service['netsuite.token'],
                        'tokenSecret' => $config_service['netsuite.tokenSecret'],
                        'signatureAlgorithm' => $config_service['netsuite.signatureAlgorithm'],
                    ];
                }
                $options = [];
                if ($config_service['netsuite.soap_options']) {
                    $options = (array) $config_service['netsuite.soap_options'];
                }

                return new NetSuiteService($config, $options);
            }
        );
        $this->app->alias('netsuite', NetSuiteService::class);
    }

    public function provides()
    {
        return [
            NetSuiteService::class,
            'netsuite',
        ];
    }

}
