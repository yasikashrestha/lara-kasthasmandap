<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable= [
       "title",
        "slug",
        " desktop image",

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
