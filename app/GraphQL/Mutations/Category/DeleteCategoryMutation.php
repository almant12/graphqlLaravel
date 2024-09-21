<?php
namespace App\GraphQL\Mutations\Category;

use App\Models\Category;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class DeleteCategoryMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteCategory',
        'description' => 'Delete a category'
    ];

    public function type(): Type
    {
        return Type::nonNull(Type::boolean()); // Kthe një boolean
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::nonNull(Type::int()),
                'rules' => ['exists:categories,id'], // Sigurohu që kategoria ekziston
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $category = Category::findOrFail($args['id']);
        return $category->delete() ? true : false; // Kthe true ose false
    }
}
