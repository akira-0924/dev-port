<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UseCases\Book\GetBook\Interactor;
use App\UseCases\Book\GetBook\InteractorInterface;
use App\Infrastructure\Book\Eloquent\EloquentBookRepository;
use App\Infrastructure\Book\BookRepositoryInterface;

class BookServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(InteractorInterface::class, Interactor::class);
        $this->app->bind(BookRepositoryInterface::class, EloquentBookRepository::class);
    }
}
