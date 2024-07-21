<?php

namespace App\Domain\Infrastructure\Book;

use App\Domain\Entities\Book\Book as DomainBook;
use App\Domain\Infrastructure\Book\BookRepositoryInterface;
use App\Models\Book as EloquentBook;

class BookRepository implements BookRepositoryInterface
{
    public function findById(string $bookId): ?DomainBook
    {
        $eloquentBook = EloquentBook::find($bookId);
        if ($eloquentBook === null) {
            return null;
        }

        return new DomainBook(
            $eloquentBook->id,
            $eloquentBook->title,
            $eloquentBook->author,
            $eloquentBook->description
        );
    }
}
