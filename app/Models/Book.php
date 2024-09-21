<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use function PHPUnit\Framework\returnCallback;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title','category_id','description'];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function authors():BelongsToMany{
        return $this->belongsToMany(User::class,'author_book');
    }
}
