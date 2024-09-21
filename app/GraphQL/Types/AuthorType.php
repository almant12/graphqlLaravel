<?php

namespace App\GraphQL\Types;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class AuthorType extends GraphQLType
{


    protected $attributes = [
        'name' => 'Author',
        'description' => 'collection of Author',
        'model' => User::class
    ];


    public function fields(): array{
        return [
            'id'=>[
                'type'=>Type::nonNull(Type::int()),
                'description'=>'id of author'
            ],
            'name'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'name of author'
            ],
            'bio'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=>'bio of author'
            ],
            'books'=>[
                'type'=>Type::listOf(GraphQL::type('Book')),
                'description'=>'a list of books for author'
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
