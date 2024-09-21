<?php

namespace App\GraphQL\Types;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class CategoryType extends GraphQLType
{
   
    protected $attributes = [
        'name'=>'Category',
        'description'=>'collection of categories',
        'model' => Category::class
    ];


    public function fields():array{

        return[
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of category'
            ],

            'name'=>[
                'type'=>Type::nonNull(Type::string()),
                'description'=> 'name of category'
            ],

            'books' => [
                'type' => Type::listOf(GraphQL::type('Book')),
                'description' => 'A list of books in the category',
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
