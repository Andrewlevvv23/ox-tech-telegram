<?php

namespace andrewlevvv23\oxTechTelegram\Providers;

use andrewlevvv23\oxTechTelegram\Facades\Telegram;
use andrewlevvv23\oxTechTelegram\Telegram\Bot\Factory;
use andrewlevvv23\oxTechTelegram\Webhook\Webhook;
use andrewlevvv23\oxTechTelegram\Console\Commands\PublishConfigCommand;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->commands([
            PublishConfigCommand::class,
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        $this->app->singleton('telegram', function($app) {
            return new Factory();
        });

        $this->app->bind(Webhook::class, function () use ($request) {
            return new Webhook($request, new Telegram());
        });

        $this->publishes([
            __DIR__ . '/../../config/telegram.php' => config_path('telegram.php'),
        ], 'config');
    }
}
