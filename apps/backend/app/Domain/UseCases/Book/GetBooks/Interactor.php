<?php

namespace App\UseCases\Book\GetBook;

use App\Infrastructure\Book\BookRepositoryInterface;
use App\Domain\ValueObjects\BookId;

class Interactor implements InteractorInterface
{
    private BookRepositoryInterface $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function handle(Request $request): Response
    {
        $bookId = new BookId($request->getBookId());
        $book = $this->bookRepository->findById($bookId);

        if ($book === null) {
            throw new \Exception('Book not found');
        }

        return new Response($book);
    }
}
