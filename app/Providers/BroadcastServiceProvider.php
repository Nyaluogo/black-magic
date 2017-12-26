<?php

namespace Black_Magik\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');

        // authenticate the user's personal channel
        Broadcast::channel('App.User.*', function($user, $userId)
      {
        return (int) $user->id === (int) $userId;
      });
    }
}
