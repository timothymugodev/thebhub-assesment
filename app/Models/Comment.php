<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'comment_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = [];

    public function user ()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function article()
    {
        return $this->belongsTo(Article::class, 'object_id');
    }
}
