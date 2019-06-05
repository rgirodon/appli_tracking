<?php

namespace App\Providers;

use App\Policies\MessengerPolicy;
use App\Room;
use App\Policies\RiddlePolicy;
use App\Riddle;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Room::class => MessengerPolicy::class,
        Riddle::class =>RiddlePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
