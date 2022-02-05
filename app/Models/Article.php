<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;;


class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'article_id';
    public $incrementing = false;
    protected $keyType = 'string';
    
    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }
}
