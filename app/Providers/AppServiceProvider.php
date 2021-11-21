<?php

namespace App\Providers;

use App\Contracts\LeadsStore;
use App\Services\TelegramBotLeadStore;
use Illuminate\Support\ServiceProvider;
use Telegram\Bot\Api;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            LeadsStore::class,
            env('LEAD_STORE_CLASS') ?: TelegramBotLeadStore::class
        );

        $this->app->when(Api::class)
            ->needs('$token')
            ->give(env('TELEGRAM_BOT_API_TOKEN'));

        $this->app->when(TelegramBotLeadStore::class)
            ->needs('$telegramChatId')
            ->give(env('TELEGRAM_BOT_CHAT_ID'));
    }
}
