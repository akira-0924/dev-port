<?php

namespace App\Infrastructure\Book;

use App\Domain\Entities\Book\Book;
use App\Domain\ValueObjects\BookId;

interface BookRepositoryInterface
{
    public function findById(BookId $bookId): ?Book;
}
