<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\UseCases\Book\GetBook\Interactor;
use App\Domain\UseCases\Book\GetBook\InteractorInterface;
use App\Domain\Infrastructure\Book\BookRepositoryInterface;
use App\Domain\Infrastructure\Book\Eloquent\EloquentBookRepository;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(InteractorInterface::class, Interactor::class);
        $this->app->bind(BookRepositoryInterface::class, EloquentBookRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
