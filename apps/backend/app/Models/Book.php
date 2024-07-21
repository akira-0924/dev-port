<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Entities\Book\Book as DomainBook;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description'
    ];


    public function createBookDomain():DomainBook
    {
        $id = $this->id;
        $title = $this->title;
        $author = $this->author;
        $description = $this->description;

        return new DomainBook($id, $title, $author, $description);
    }
}
