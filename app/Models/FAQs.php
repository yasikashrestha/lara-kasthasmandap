<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQs extends Model
{
    protected $fillable= [
        "question",
        "answer",
        "image",
        "status",
        "order",


    ];
}
