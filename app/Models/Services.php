<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
        "image",
        "title",
        "slug",
        "short_description",
        "description",
        "status",
        "order",
        "featured icon",
        "seo title",
        "meta keywords",
        "meta description",
        "seo schema",
    ];
}
