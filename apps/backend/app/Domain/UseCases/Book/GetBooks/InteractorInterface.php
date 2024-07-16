<?php

namespace App\UseCases\Book\GetBook;

interface InteractorInterface
{
    public function handle(Request $request): Response;
}
