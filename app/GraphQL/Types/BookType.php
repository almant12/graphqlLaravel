<?php

namespace App\GraphQL\Types;

use App\Models\Book;
use GraphQL\Type\Definition\ListOfType;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BookType extends GraphQLType
{

    protected $attributes = [
        'name' => 'Book',
        'description' => 'collection of books',
        'model' => Book::class
    ];


    public function fields(): array{
        
        return[
            'id'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'id of book'
            ],
            'tite'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'title of book'
            ],
            'description'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'description of book'
            ],
            'authors'=>[
                'type'=>Type::listOf(GraphQL::type('Author')),
                'description'=>'A list of authors for the book'
            ],
            'category'=>[
                'type'=>GraphQL::type('Category'),
                'description'=>'the category of the book'
            ],
            'created_at' => [
            'type' => Type::nonNull(Type::string()),
            'description' => 'The timestamp when the category was created',
            ],

            'updated_at' => [
            'type' => Type::nonNull(Type::string()),
            'description' => 'The timestamp when the category was last updated',
            ],
        ];
    }
}
