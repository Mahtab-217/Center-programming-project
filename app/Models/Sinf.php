<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sinf extends Model
{
    //
    protected $fillable=[
        "title",
        "start_date",
        "end_date",
        "description",
        "banner_url",
        "teacher_id",
    ];
}
