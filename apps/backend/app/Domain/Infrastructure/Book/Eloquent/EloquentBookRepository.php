<?php

namespace App\Domain\Infrastructure\Book\Eloquent;

use App\Domain\Entities\Book\Book as DomainBook;
use App\Domain\ValueObjects\Book\BookId;
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
        // dd($eloquentBook->id);
        dd(new BookId($eloquentBook->id));

        return new DomainBook(
            new BookId($eloquentBook->id),
            $eloquentBook->title,
            $eloquentBook->author,
            $eloquentBook->description
        );
    }
}
