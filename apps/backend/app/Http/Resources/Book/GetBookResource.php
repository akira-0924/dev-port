<?php

namespace App\Http\Resources\Book;

use Illuminate\Http\Resources\Json\JsonResource;

class GetBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'description' => $this->getDescription(),
        ];
    }
}
