<?php

namespace App\Domain\UseCases\Book\GetBook;

use App\Domain\ValueObjects\Book\BookId;

class Request
{
    private BookId $bookId;
    public function __construct(string $bookId)
    {
        $this->bookId = new BookId($bookId);
    }

    public function getBookId(): BookId
    {
        return $this->bookId;
    }
}
