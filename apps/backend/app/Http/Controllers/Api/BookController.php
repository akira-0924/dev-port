<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\GetBookRequest;
use App\Domain\UseCases\Book\GetBook\InteractorInterface;
use App\Domain\UseCases\Book\GetBook\Request as GetBookRequestModel;
use App\Http\Resources\Book\GetBookResource;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    private InteractorInterface $getBookInteractor;

    public function __construct(InteractorInterface $getBookInteractor)
    {
        $this->getBookInteractor = $getBookInteractor;
    }

    public function show(GetBookRequest $request): JsonResponse
    {

        $bookId = $request->get('book_id');
        $getBookRequest = new GetBookRequestModel($bookId);
        $response = $this->getBookInteractor->handle($getBookRequest);

        return response()->json(new GetBookResource($response->getBook()));
    }
}
