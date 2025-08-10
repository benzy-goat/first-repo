<?php

namespace App\Providers;

use App\Models\Hotel;
use App\Models\Park;
use App\Models\Post;
use App\Models\User;
use App\Models\Zoo;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::MorphMap(
            [
               'posts' => Post::class,
               'users' => User::class,
               'parks' => Park::class,
               'zoos' => Zoo::class,
               'hotels' => Hotel::class,
            ]
        );
    }
}
