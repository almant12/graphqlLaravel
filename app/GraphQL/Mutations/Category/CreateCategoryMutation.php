<?php

namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;


class CreateCategoryMutation extends Mutation
{

    protected $attributes = [
        'name' => 'createCategory',
        'description'=>'Create a Category'
    ];

    public function type(): Type{
        return GraphQL::type('Category');
    }


    public function args(): array{
        return[
            'name'=>[
                'name'=>'name',
                'type'=>Type::nonNull(Type::string()),
                'rules'=>['required']
            ]
            ];
    }

    public function resolve($root,$args){
        
        $category = new Category();
        $category->fill($args);
        $category->save();

        return $category;
    }

}
