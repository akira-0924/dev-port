<?php

namespace App\Domain\UseCases\Book\GetBook;

use App\Domain\Entities\Book\Book;
use App\Domain\Infrastructure\Book\BookRepositoryInterface;


class Interactor implements InteractorInterface
{
    private BookRepositoryInterface $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function handle(Request $request): Response
    {
        $book = $this->bookRepository->findById($request->getBookId());

        return new Response($book);
    }
}
