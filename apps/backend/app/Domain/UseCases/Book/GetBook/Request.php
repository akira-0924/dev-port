<?php

namespace App\Domain\UseCases\Book\GetBook;



class Request
{
    private string $bookId;
    public function __construct(string $bookId)
    {
        $this->bookId = $bookId;
    }

    public function getBookId(): string
    {
        return $this->bookId;
    }
}
