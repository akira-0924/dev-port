<?php

namespace App\UseCases\Book\GetBook;

use App\Domain\Entities\Book\Book;

class Response
{
    private Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getBook(): Book
    {
        return $this->book;
    }
}
