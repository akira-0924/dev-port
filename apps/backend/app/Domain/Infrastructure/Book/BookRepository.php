<?php

namespace App\Domain\Infrastructure\Book;

use App\Domain\Entities\Book\Book as DomainBook;
use App\Domain\Infrastructure\Book\BookRepositoryInterface;
use App\Models\Book as EloquentBook;

class BookRepository implements BookRepositoryInterface
{
    public function findById(string $bookId): ?DomainBook
    {
        $book = EloquentBook::find($bookId);
        if ($book === null) {
            return null;
        }

        return $book->createBookDomain();
    }
}
