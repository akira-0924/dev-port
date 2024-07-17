<?php

namespace App\Domain\Infrastructure\Book\Eloquent;

use App\Domain\Entities\Book\Book as DomainBook;
use App\Domain\ValueObjects\BookId;
use App\Domain\Infrastructure\Book\BookRepositoryInterface;
use App\Models\Book as EloquentBook;

class EloquentBookRepository implements BookRepositoryInterface
{
    public function findById(BookId $bookId): ?DomainBook
    {
        $eloquentBook = EloquentBook::find($bookId->getValue());
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
