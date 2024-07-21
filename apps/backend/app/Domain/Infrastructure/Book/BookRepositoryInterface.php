<?php

namespace App\Domain\Infrastructure\Book;

use App\Domain\Entities\Book\Book;

interface BookRepositoryInterface
{
    public function findById(string $bookId): ?Book;
}
