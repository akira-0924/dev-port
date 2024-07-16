<?php

namespace App\UseCases\Book\GetBook;

use PhpParser\Node\Expr\Cast\String_;

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
