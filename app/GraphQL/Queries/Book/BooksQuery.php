<?php

namespace App\GraphQL\Queries\Book;

use App\Models\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class BooksQuery extends Query
{

    protected $attributes = [
        'name' => 'Books'
    ];


    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Book'));
    }

    public function resolve(){
        return Book::all();
    }
}
