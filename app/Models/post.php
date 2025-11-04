<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'location',
        'description',
        'image_url'
    ];

    // Function count untuk menghitung jumlah post
    public static function countPosts()
    {
        return self::count();
    }
}
