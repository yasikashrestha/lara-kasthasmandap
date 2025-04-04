<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable= [
        "name",
        "position",
        "image",
        "description",
        "facebook",
        "instagram",
        "twitter",
        "order",
        "status",

    ];
}
