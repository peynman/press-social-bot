<?php

namespace Larapress\SocialBot\Providers;

use Illuminate\Broadcasting\BroadcastManager;
use Illuminate\Support\ServiceProvider;
use Larapress\Giv\Commands\GivSyncCategories;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @param  BroadcastManager $broadcastManager
     * @return void
     */
    public function boot(BroadcastManager $broadcastManager)
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'larapress');

        $this->publishes([
            __DIR__.'/../../config/social-bot.php' => config_path('larapress/social-bot.php'),
        ], ['config', 'larapress', 'larapress-social-bot']);
    }
}
