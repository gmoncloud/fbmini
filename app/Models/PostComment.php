<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    /**
     * Get the post that the comment belongs to.
     */
    public function userPost()
    {
        return $this->belongsTo(UserPost::class);
    }
}
