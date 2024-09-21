<?php

namespace App\GraphQL\Queries\Book;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
class BookQuery extends Query
{

    protected $attributes = [
        'name'=>'Book'
    ];


    public function type(): Type{
        return GraphQL::type('Book');
    }
    
}
