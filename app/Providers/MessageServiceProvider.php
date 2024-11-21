<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\MessageService;
use App\Services\EmailMessageService;
use App\Services\SMSMessageService;
class MessageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MessageService::class, EmailMessageService::class);
        $this->app->bind(MessageService::class, SMSMessageService::class);


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(base_path('routes/message.php'));
    }
}
