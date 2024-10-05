<?php

namespace andrewlevvv23\oxTechTelegram\Providers;

use andrewlevvv23\oxTechTelegram\Facades\Telegram;
use andrewlevvv23\oxTechTelegram\Bot\Factory;
use andrewlevvv23\oxTechTelegram\Webhook\Webhook;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //-
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Request $request): void
    {
        $this->app->singleton('telegram', function() {
            return new \andrewlevvv23\oxTechTelegram\Telegram\Factory();
        });

        $this->app->bind(Webhook::class, function () use ($request) {
            return new Webhook($request, new Telegram());
        });
    }
}
