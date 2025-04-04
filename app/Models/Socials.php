<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Socials extends Model
{
    protected $fillable =[
        "order",
        "status",
        "title",
        "icon",
        "link"

    ];
}
