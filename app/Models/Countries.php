<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $fillable= [
        "title",
        "slug",
        "image",
        "short_description",
        "description",
        "status",
        "order",
        "flag",
        "seo title",
        "meta keywords",
        "meta description",
        "seo schema",
    ];
}
