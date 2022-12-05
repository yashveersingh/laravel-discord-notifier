<?php

namespace yashveersingh\laravelDiscordNotifier;
use Illuminate\Support\ServiceProvider;

class DiscordNotifier extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    public function register()
    {
    }
}
