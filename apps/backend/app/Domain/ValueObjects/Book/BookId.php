<?php

namespace App\Domain\ValueObjects\Book;

class BookId
{
    private string $id;

    public function  __construct(string | int $id)
    {
        if(empty($id)) {
            throw new \InvalidArgumentException('Book ID cannot be empty');
        }
        $this->id = $id;
    }

    public function getValue(): string
    {
        return $this->id;
    }

    public function equals(BookId $other): bool
    {
        return $this->id === $other->getValue();
    }
}
