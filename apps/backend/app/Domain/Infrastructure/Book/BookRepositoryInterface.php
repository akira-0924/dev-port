<?php

namespace App\Domain\Infrastructure\Book;

use App\Domain\Entities\Book\Book;
use App\Domain\ValueObjects\Book\BookId;

interface BookRepositoryInterface
{
    public function findById(BookId $bookId): ?Book;
}
