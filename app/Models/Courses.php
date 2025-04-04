<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable= [
        "title",
        "slug",
        "image",
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
