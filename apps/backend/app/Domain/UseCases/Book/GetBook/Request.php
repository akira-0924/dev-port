<?php

namespace App\Domain\UseCases\Book\GetBook;

use App\Domain\ValueObjects\BookId;

class Request
{
    private BookId $bookId;
    public function __construct(string $bookId)
    {
        $this->bookId = $bookId;
    }

    public function getBookId(): BookId
    {
        return $this->bookId;
    }
}
