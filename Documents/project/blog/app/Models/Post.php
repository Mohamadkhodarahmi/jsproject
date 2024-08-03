<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
//    use HasFactory;
    protected $table = 'posts';
    protected $fillable= [
        'user_id',
        'title',
        'body'
    ];
    protected mixed $id;




    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function path(): string
    {
        return "/posts/{$this->id}";
    }
}
