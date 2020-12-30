<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function addLikes($times = 1)
    {
        $times += $this->likes_count;

        $this->fill([
            'likes_count' => $times
        ])->save();

    }
}
