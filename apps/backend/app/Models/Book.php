<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\UseCases\Book\GetBook\GetBookDomain;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description'
    ];

    /**
     * ドメインエンティティを生成して返す。
     *
     * @return BookDomain
     */
    public function createBookDomain():GetBookDomain
    {
        $id = $this->id;
        $title = $this->title;
        $author = $this->author;
        $description = $this->description;

        return new GetBookDomain($id, $title, $author, $description);
    }
}
