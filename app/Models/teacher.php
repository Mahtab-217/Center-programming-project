<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    protected $fillable = [
        "last_name",
        "degree_of_education",
        "phone_number",
        "image_url",
        "bio",
        "user_id",
    ];
}
