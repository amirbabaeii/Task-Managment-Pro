<?php

namespace App\Providers;

use App\Repositories\Interfaces\TaskRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\TaskRepository;
use App\Repositories\UserRepository;
use App\Repositories\Auth\AuthRepository;
use App\Repositories\Interfaces\Auth\AuthRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
} 