<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public static function getNewsBySlug($slug)
    {
        return News::where('slug', $slug)->first();
    }
}
