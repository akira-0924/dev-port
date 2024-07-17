<?php

namespace App\Domain\UseCases\Book\GetBook;

interface InteractorInterface
{
    public function handle(Request $request): Response;
}
