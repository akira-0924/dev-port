<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UseCases\Book\GetBook\Interactor;
use App\UseCases\Book\GetBook\InteractorInterface;
use App\Infrastructure\Book\BookRepositoryInterface;
use App\Infrastructure\Book\Eloquent\EloquentBookRepository;

class BookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // インターフェースと実装クラスをシングルトンでバインド
        $this->app->singleton(InteractorInterface::class, function ($app) {
            return new Interactor(
                $app->make(BookRepositoryInterface::class)
            );
        });

        $this->app->singleton(BookRepositoryInterface::class, function ($app) {
            return new EloquentBookRepository();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
