<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable= [
        "title",
        "slug",
        "image",
        "views",
        "likes",
        "short_description",
        "description",
        "status",
        "order",
        "seo title",
        "meta keywords",
        "meta description",
        "seo schema",
    ];
}
